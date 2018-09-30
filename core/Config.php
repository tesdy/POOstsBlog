<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 28/09/18
 * Time: 16:38
 */

namespace Core;


class Config
{

    private $settings = [];
    private static $_instance;

    /**
     * Singleton Instance
     * @param $file
     * @return Config
     */
    public static function getInstance($file)
    {
        // Singleton
        if(is_null(self::$_instance)) {
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    /**
     * Config constructor.
     * data array for access to the database
     * @param $file
     */
    public function __construct($file)
    {
//        $this->id = uniqid(); // check uniq instance
        $this->settings = require($file);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        if(!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }



}