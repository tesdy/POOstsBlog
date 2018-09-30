<?php

$articleTable = App::getInstance()->getTable('article');

if(!empty($_POST)) {
    $articleTable->update($_GET['id'], array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu']
        ));
}
$article = $articleTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($article);

?>


<form method="post">

    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Envoyer</button>

</form>