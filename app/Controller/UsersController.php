<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 01/10/18
 * Time: 16:34
 */

namespace App\Controller;

use \App;
use \Core\Auth\DBAuth;
use \Core\HTML\BootstrapForm;

class UsersController extends AppController
{

    public function login()
    {
        $errors = false;
        if(!empty($_POST)) {
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;

            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

    public function logout() {
        if($_SESSION['auth']) {
        $_SESSION['auth'] = null;
        header('Location: index.php');
        }
    }
}