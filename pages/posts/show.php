<?php

$app = App::getInstance();

$article = $app->getTable('Article')->find($_GET['id']);

if($article === false) {
    $app->notFound();
}

$app->title = $article->titre;
?>

<h2><?= $article->titre; ?> <span style="font-size: small">(<?= $article->cat_nom ?>)</span></h2>

<p><?= $article->contenu; ?></p>
