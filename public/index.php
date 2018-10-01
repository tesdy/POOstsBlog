<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 27/09/18
 * Time: 08:18
 */


define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();


if(isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

if($page === 'home') {
    $controller = new \App\Controller\PostsController();
    $controller->index();
} elseif ($page === 'posts.category'){
    $controller = new \App\Controller\PostsController();
    $controller->category();
} elseif ($page === 'posts.show'){
    $controller = new \App\Controller\PostsController();
    $controller->show();
} elseif ($page === 'login'){
    $controller = new \App\Controller\UsersController();
    $controller->login();
} elseif ($page === 'admin.posts.index') {
    $controller = new \App\Controller\Admin\ArticlesController();
    $controller->index();
}elseif ($page === 'unsign'){
    $controller = new \App\Controller\UsersController();
    $controller->logout();
} else {
    $controller = new \App\Controller\Admin\ArticlesController();
    $controller->error();
}