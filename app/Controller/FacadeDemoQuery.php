<?php
/**
 * Test du Design Pattern Facade
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 02/10/18
 * Time: 11:20
 */

namespace App\Controller;


use Core\Database\QueryBuilder;

class FacadeDemoQuery
{
        public static function __callStatic($methodName, $arguments)
        {
            $query = new QueryBuilder();
            return (call_user_func_array([$query, $methodName], $arguments)); // Appelle une callback avec les paramètres rassemblés en tableau

        }

}