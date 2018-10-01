<h1>Gestion des articles</h1>

<p>
    <a href="?p=posts.add" class="btn btn-success">Ajouter un nouveau livre</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>Identifiant</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
    <?php
    foreach ($articles as $article):?>

        <tr>
            <td><?= $article->id ?></td>
            <td><a href="index.php?p=posts.show&id=<?= $article->id ?>"><?= $article->titre ?></a></td>
            <td>
                <a href="?p=posts.edit&id=<?= $article->id ?>" class="btn btn-primary">Editer</a>

                <!-- TODO Pour la suppression d'un article : voir les Token CRSF : Cross-Site Request Forgery
                Solution temporaire via un formulaire : -->
                <form action="?p=posts.delete" method="post" style="display: inline">
                    <input type="hidden" name="id" value="<?= $article->id ?>">
                    <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $article->id ?>">Supprimer</button>
                </form>
            </td>
        </tr>

    <?php
    endforeach;
    ?>
    </tbody>
</table>