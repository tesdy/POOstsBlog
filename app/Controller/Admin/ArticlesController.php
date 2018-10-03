<?php

namespace App\Controller\Admin;


use App;
use Core\HTML\BootstrapForm;

/**
 * Class ArticlesController
 * @package App\Controller\Admin
 */
class ArticlesController extends AppController
{

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadModel("Article");
    }


    /**
     * View with Category menu
     * indexView <-> Article data
     */
    public function index()
    {
        $articles = $this->Article->all();
        $this->render('admin.articles.index', compact('articles'));
    }

    public function add() {
        if(!empty($_POST)) {
            $response = $this->Article->create(array(
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'date' => $_POST['date'],
                'category_id' => $_POST['category_id']
            ));
            if($response === true) {
                /** Gestion des Insert Doublons */
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extractArray('id', 'nom');
        $form = new BootstrapForm($_POST);
        $this->render('admin.articles.edit', compact('categories', 'form'));
    }

    public function edit() {
        if(!empty($_POST)) {
            $response = $this->Article->update($_GET['id'], array(
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ));
            if($response === true) {
                return $this->index();
            }
        }
        $article = $this->Article->findWithCategory($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extractArray('id', 'nom');
        $form = new BootstrapForm($article);
        $this->render('admin.articles.edit', compact('categories','article', 'form'));
    }

    public function delete() {
        $response = $this->Article->delete($_POST['id']);
        if($response === true) {
            // TODO improve delete action !
            return $this->index();
        }
    }

}