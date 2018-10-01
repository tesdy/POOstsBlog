<?php
$instance = App::getInstance();
$articleTable = $instance->getTable('Article');

if(!empty($_POST)) {
    $response = $articleTable->delete($_POST['id']);
    if($response === true) {
        header('Location: admin.php');
    }
}