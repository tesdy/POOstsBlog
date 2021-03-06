<div class="row">
    <div class="col-sm-8">

        <?php foreach (App::getInstance()->getTable('Article')->last() as $article): ?>

            <h2><a href="<?= $article->url ?>"><?= $article->titre ?></a> <span style="font-size: small">(<?= $article->cat_nom ?>)</span></h2>

            <p><?= nl2br($article->extrait) ?></p>


        <?php endforeach; ?>

    </div>
    <div class="col-sm-4">
        <h3><em>Liste des catégories</em></h3>
        <ul>
            <?php
            foreach (App::getInstance()->getTable('Category')->all() as $categorie): ?>
                <li><a href="index.php?p=posts.category&id=<?= $categorie->id ?>"><?= $categorie->nom ?></a></li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
</div>
