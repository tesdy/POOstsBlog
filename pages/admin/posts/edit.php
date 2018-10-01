<?php
$instance = App::getInstance();
$articleTable = $instance->getTable('Article');

if(!empty($_POST)) {
    $response = $articleTable->update($_GET['id'], array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'category_id' => $_POST['category_id']
    ));
    if($response === true) {
        ?>
        <div class="alert alert-success" role="alert">Les modifications ont bien été prises en compte.</div>
        <?php
    }
}
$article = $articleTable->findWithCategory($_GET['id']);
$categories = $instance->getTable('Category')->extractArray('id', 'nom');
$form = new \Core\HTML\BootstrapForm($article);
?>
<h1>Edition de "<?= $article->titre; ?>"</h1>

<a href="index.php?p=posts.show&id=<?= $_GET['id']; ?>">Retourner sur l'article</a>

<form method="post">

    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>


