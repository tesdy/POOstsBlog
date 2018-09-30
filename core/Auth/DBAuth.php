<?php

namespace Core\Auth;


use Core\Database\Database;

/**
 * Class DBAuth
 * @package Core\Auth
 */
class DBAuth
{

    private $db;

    /**
     * DBAuth constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getUserId() {
        if($this->logged()) {
            return $_SESSION['auth'];
        } else {
            return false;
        }
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password)
    {

        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], __CLASS__ , true);
        if($user) {
            if($user->password === sha1($password)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }




}