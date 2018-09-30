<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 29/09/18
 * Time: 13:38
 */

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();


if(isset($_GET['p'])) {
    $page = $_GET['p'];
} else {

    $page = 'home';

}

// Authentification
$app = App::getInstance();

$auth = new DBAuth($app->getDb());
if(!$auth->logged()) {
    $app->forbidden();
}

ob_start();
if($page === 'home') {
    require ROOT . '/pages/admin/posts/index.php';
} elseif ($page === 'posts.edit'){
    require ROOT . '/pages/admin/posts/edit.php';
} elseif ($page === 'posts.show'){
    require ROOT . '/pages/admin/posts/show.php';
} else {
    require ROOT . '/pages/admin/error.php';
}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';
