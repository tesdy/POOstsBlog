<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 01/10/18
 * Time: 13:59
 */

namespace App\Controller\Admin;

use \App;
use Core\Auth\DBAuth;

class AppController extends \App\Controller\AppController {

    public function __construct()
    {
        parent::__construct();
        // Authentification
        $app = App::getInstance();

        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()) {
            $this->forbidden();
        }

    }

}