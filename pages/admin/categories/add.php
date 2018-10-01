<?php
$instance = App::getInstance();
$categoriesTable = $instance->getTable('category');

if(!empty($_POST)) {
    $response = $categoriesTable->create(array(
        'nom' => $_POST['nom'],
    ));
    if($response === true) {
        /** Gestion des Insert Doublons */
        // Solution 1
        //?><!--<div class="alert alert-success" role="alert">--><?//= $_POST['titre'] ?><!-- a bien été ajouté.</div>--><?php// } else { ?><!--<div class="alert alert-danger" role="alert">Le livre --><?//= $_POST['titre'] ?><!-- est déjà enregistré.</div>--><?php
        // Solution 2
        header("Location: admin.php?p=categories.edit&id=". $instance->getDb()->lastInsertId());

    }
}

$form = new \Core\HTML\BootstrapForm($_POST);
?>


<form method="post">

    <?= $form->input('nom', 'Nom de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>