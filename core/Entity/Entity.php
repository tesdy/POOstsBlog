<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 29/09/18
 * Time: 10:30
 */


namespace Core\Entity;

class Entity
{
    public function __get($key) {

        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }


}