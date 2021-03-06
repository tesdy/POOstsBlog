<?php

$app = App::getInstance();

$categorie = $app->getTable('Category')->find($_GET['id']);

if($categorie === false) {
    $app->notFound();
}

$articles = $app->getTable('Article')->lastByCategory($_GET['id']);
$categories = $app->getTable('Category')->all();
?>

<h1><?= $categorie->nom ?></h1>

<div class="row">
    <div class="col-sm-8">

        <?php if(!empty($articles)){
            foreach ($articles as $article) {
                ?>
                <h2><a href="<?= $article->url ?>"><?= $article->titre; ?></a></h2>
                <p><?= $article->extrait; ?></p>
                <?php
            } // end foreach
        }  else { // endif ?>
            <p>Pas de BD dans cette catégorie.</p>
        <?php } ?>
    </div>

    <div class="col-sm-4">
        <h3><em>Liste des catégories</em></h3>
        <ul>
            <?php
            foreach ($categories as $categorie): ?>
                <li><a href="index.php?p=posts.category&id=<?= $categorie->id ?>"><?= $categorie->nom ?></a></li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
</div>
