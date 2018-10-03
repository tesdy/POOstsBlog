<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 27/09/18
 * Time: 12:10
 */


use Core\Config;
use Core\Database\MysqlDatabase;

/**
 * Class App with design Pattern : Factory + Dependency injection + Singleton
 * @package App
 */
class App
{

    public $title = 'BD_Blog';
    private $db_instance;
    private static $_instance;

    /**
     * @return App
     */
    public static function getInstance() {
        // Singleton : unique App->_instance
        if(is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getTable($name) {
        $class_name = 'App\\Table\\' . ucfirst($name) . 'Table';
        // Dependency injection of Database for xxxTable
        return new $class_name($this->getDb());
    }

    /**
     * @return MysqlDatabase
     */
    public function getDb()
    {
        $config = Config::getInstance(ROOT . '/config/config.php');
        // Singleton : unique App->db_Instance
        if (is_null($this->db_instance)) {
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_host'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_charset'));
        }
        return $this->db_instance;
    }


    public static function load() {
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::Register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::Register();


    }

    public static function notFound() {
        header("HTTP/1.0 404 Not Found", true, 404);
        header('Location: index.php?p=error');
    }

    public function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        // TODO ajouter un header + message flash
        die('Accès interdit');

    }




}