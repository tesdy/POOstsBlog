<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 02/10/18
 * Time: 10:55
 */

namespace Core\Database;


class QueryBuilder
{

    private $fields = array();
    private $from = array();
    private $conditions = array();

    public function select() {
        $this->fields = func_get_args();
        return $this;
    }

    public function from($table, $alias = null) {
        if(is_null($alias)) {
            $this->from[] = $table;
        } else {
            $this->from[] = "$table AS $alias";
        }
        return $this;
    }

    public function where() {
        foreach (func_get_args() as $arg) {
            $this->conditions[] = $arg;
        }
        return $this;
    }

    public function __toString() {
        return 'SELECT ' . implode(', ', $this->fields) .
                ' FROM ' . implode(', ', $this->from) .
                ' WHERE ' . implode(' AND ', $this->conditions);
    }



}