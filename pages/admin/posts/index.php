<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 29/09/18
 * Time: 13:41
 */

$articles = App::getInstance()->getTable('article')->all();
?>

<h1>Administrer les articles</h1>

<table class="table">
    <thead>
    <tr>
        <td>Id</td>
        <td>Titre</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($articles as $article):?>

    <tr>
        <td><?= $article->id ?></td>
        <td><?= $article->titre ?></td>
        <td>
            <a href="?p=posts.edit&id=<?= $article->id ?>" class="btn btn-primary">Editer</a>
        </td>
    </tr>

    <?php
    endforeach;
    ?>
    </tbody>
</table>