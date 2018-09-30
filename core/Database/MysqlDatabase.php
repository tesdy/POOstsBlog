<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 27/09/18
 * Time: 09:46
 */

namespace Core\Database;


use PDO;

/**
 * Class Database
 * @package App
 */
class MysqlDatabase extends Database
{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $db_charset;
    private $pdo;


    /**
     * Database constructor.
     * @param string $db_name : Database name
     * @param string $db_host : Database hostname
     * @param string $db_user : Username
     * @param string $db_pass : User password
     * @param string $db_charset : Character Encoding
     */
    public function __construct($db_name, $db_host, $db_user, $db_pass, $db_charset) {

        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->db_charset = $db_charset;
    }

    /**
     * @return object PDO
     */
    private function getPDO() {
        // empêcher la multiplication d'instance de PDO :
        if(is_null($this->pdo)) {;
            $pdo = new PDO("mysql:dbname=$this->db_name;host=$this->db_host;", $this->db_user, $this->db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES '" . $this->db_charset . "'"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }


    /**
     * @param $statement
     * @param $class_name
     * @param bool $one
     * @return array
     */
    public function query($statement, $class_name = null, $one = false)
    {
        $req = $this->getPDO()->query($statement);
        // gestion des !SELECT :
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ) {
            return $req;
        }
        if(is_null($class_name)) {
            $req->setFetchMode(PDO::FETCH_OBJ);

        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }


    /**
     * @param $statement ( Prepared statement ! )
     * @param $attributes ( values for the parameters of the statement template )
     * @param $class_name ( Name of the class where to retrieve datas )
     * @param bool $one ( List or Single )
     * @return array|mixed ( object with db data )
     */
    public function prepare($statement, $attributes, $class_name = null, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        // gestion des !SELECT :
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ) {
            return $res;
        }

        if($class_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();

        }
        return $datas;
    }



}