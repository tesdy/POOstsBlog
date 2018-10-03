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

ob_start();
if($page === 'home') {
    require ROOT . '/views/admin/articles/index.php';
} elseif ($page === 'admin.articles.edit' || $page === 'admin.articles.add'){
    require ROOT . '/views/admin/articles/edit.php';
} elseif ($page === 'articles.delete'){
    require ROOT . '/views/admin/index.';
} elseif($page === 'categories.index') {
    require ROOT . '/views/admin/categories/index.php';
} elseif ($page === 'categories.edit'){
    require ROOT . '/views/admin/categories/edit.php';
} else {
    require ROOT . '/views/error.php';
}

$content = ob_get_clean();
require ROOT . '/views/templates/default.php';
