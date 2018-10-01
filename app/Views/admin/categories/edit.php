<?php
$instance = App::getInstance();
$categoriesTable = $instance->getTable('category');

if(!empty($_POST)) {
    $response = $categoriesTable->update($_GET['id'], array(
        'nom' => $_POST['nom']
    ));
    if($response === true) {
        ?>
        <div class="alert alert-success" role="alert">Les modifications ont bien été prises en compte.</div>
        <?php
    }
}
$category = $categoriesTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($category);
?>
<h1>Edition de "<?= $category->nom; ?>"</h1>

<a href="admin.php?p=categories.index">Retourner sur l'index des catégories</a>

<form method="post">

    <?= $form->input('nom', 'Nom de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>


