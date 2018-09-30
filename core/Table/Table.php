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

    public function find($id) {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?;", array($id), true);
    }

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

}