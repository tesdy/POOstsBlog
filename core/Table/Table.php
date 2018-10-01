<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 28/09/18
 * Time: 17:07
 */

namespace Core\Table;

use Core\Database\Database;

/**
 * Class Table with design Pattern : Dependency Injection
 * @package App\Table
 */
class Table
{
    protected $table;
    protected $db;

    /**
     * Constructor with Dependency Injection : App\Database\Database
     * Table constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
        if(is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    /**
     * @return mixed
     */
    public function all() {
        return $this->query("SELECT * FROM " . $this->table);
    }

    /**
     * @param $statement
     * @param null $attributs
     * @param bool $one
     * @return mixed
     */
    public function query($statement, $attributs = null, $one = false) {
        if($attributs) {
            return $this->db->prepare(
                $statement,
                $attributs,
                str_replace('Table', 'Entity', get_class($this)),
                $one);

        } else  {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one);

        }

    }

    /**
     * @param $key
     * @param $value
     * @return array
     */
    public function extractArray($key, $value) {
        $records = $this->all();
        $return = array();
        foreach ($records as $record) {
            $return[$record->$key] = $record->$value;
        }
        return $return;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id) {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?;", array($id), true);
    }

    /**
     * @param $id
     * @param $fields
     * @return mixed
     */
    public function update($id, $fields) {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $field => $value) {
            $sql_parts[] = "$field = ?";
            $attributes[] = $value;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?;", $attributes, true);
    }

    /**
     * @param $fields
     * @return mixed|string
     */
    public function create($fields) {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $field => $value) {
            $sql_parts[] = "$field = ?";
            $attributes[] = $value;
        }
        $sql_part = implode(', ', $sql_parts);
        // TODO : Gerer le cas d'un titre qui existe déjà !
        try {
            return $this->query("INSERT INTO {$this->table} SET $sql_part;", $attributes, true);
        } catch(\PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $id
     * @param $fields
     * @return mixed
     */
    public function delete($id) {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }

}