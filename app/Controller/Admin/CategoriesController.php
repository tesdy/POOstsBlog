<?php

namespace App\Controller\Admin;


use App;
use Core\HTML\BootstrapForm;

/**
 * Class ArticlesController
 * @package App\Controller\Admin
 */
class CategoriesController extends AppController
{

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadModel("Category");
    }


    /**
     * View with Category menu
     * indexView <-> Article data
     */
    public function index()
    {
        $categories = $this->Category->all();
        $this->render('admin.categories.index', compact('categories'));
    }

    public function add() {
        if(!empty($_POST)) {
            $response = $this->Category->create(array(
                'nom' => $_POST['nom'],
            ));
                return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function edit() {
        if(!empty($_POST)) {
            $response = $this->Category->update($_GET['id'], array(
                'nom' => $_POST['nom'],
            ));
                return $this->index();
        }
        $categorie = $this->Category->find($_GET['id']);
        $form = new BootstrapForm($categorie);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function delete() {
        $response = $this->Category->delete($_POST['id']);
        if($response === true) {
            // TODO improve delete action !
            return $this->index();
        }
    }

}