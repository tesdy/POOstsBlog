<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 29/09/18
 * Time: 13:41
 */

$categories = App::getInstance()->getTable('category')->all();
?>

<h1>Gestion des Catégories</h1>

<p>
    <a href="?p=admin.categories.add" class="btn btn-success">Ajouter une nouvelle catégorie</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>Identifiant</td>
            <td>Nom</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
    <?php
    foreach ($categories as $categorie):?>

        <tr>
            <td><?= $categorie->id ?></td>
            <td><a href="index.php?p=admin.categories.show&id=<?= $categorie->id ?>"><?= $categorie->nom ?></a></td>
            <td>
                <a href="index.php?p=admin.categories.edit&id=<?= $categorie->id ?>" class="btn btn-primary">Editer</a>

                <!-- TODO Pour la suppression d'un article : voir les Token CRSF : Cross-Site Request Forgery
                Solution temporaire via un formulaire : -->
                <form action="?p=admin.categories.delete" method="post" style="display: inline">
                    <input type="hidden" name="id" value="<?= $categorie->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

    <?php
    endforeach;
    ?>
    </tbody>
</table>