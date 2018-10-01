<?php
$instance = App::getInstance();
$articleTable = $instance->getTable('Article');

if(!empty($_POST)) {
    $response = $articleTable->create(array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'date' => $_POST['date'],
        'category_id' => $_POST['category_id']
    ));
    if($response === true) {
        /** Gestion des Insert Doublons */
        // Solution 1
        //?><!--<div class="alert alert-success" role="alert">--><?//= $_POST['titre'] ?><!-- a bien été ajouté.</div>--><?php// } else { ?><!--<div class="alert alert-danger" role="alert">Le livre --><?//= $_POST['titre'] ?><!-- est déjà enregistré.</div>--><?php
        // Solution 2
        header("Location: admin.php?p=posts.edit&id=". $instance->getDb()->lastInsertId());

    }
}

$categories = $instance->getTable('Category')->extractArray('id', 'nom');
$form = new \Core\HTML\BootstrapForm($_POST);
?>


<form method="post">

    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->input('date', 'Date d\'édition', ['type' => 'date']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>