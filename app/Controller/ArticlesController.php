<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 01/10/18
 * Time: 13:59
 */

namespace App\Controller;

use App;

/**
 * Class ArticlesController
 * @package App\Controller
 */
class ArticlesController extends AppController {

    /**
     * ArticlesController constructor.
     *
     */
    public function __construct()
    {
        // Récupérer la logique faite dans le construct parent
        parent::__construct();
        // Load object Table\xxxTable
        $this->loadModel('Article'); // {ArticleTable}
        $this->loadModel('Category'); // {CategoryTable}
    }

    /**
     * Page with Category Menu
     * indexView <-> Article data
     * indexView <-> Category data
     */
    public function index() {
        $this->Article;
        $articles = $this->Article->last(); //
        $categories = $this->Category->all();
        $this->render('articles.index', compact('articles','categories'));

    }

    /**
     * Page Article for Category ID
     *
     */
    public function category()
    {
        $category = $this->Category->find($_GET['id']);
        if($category === false) {
            $this->notFound();
        }

        $articles = $this->Article->lastByCategory($_GET['id'], 4);
        $categories = $this->Category->all();
        $this->render('articles.category', compact('articles','categories', 'category'));
    }

    /**
     *
     */
    public function show() {

        $article = $this->Article->findWithCategory($_GET['id']);
        $this->render('articles.show', compact('article'));
    }

}