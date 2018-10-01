<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 01/10/18
 * Time: 13:59
 */

namespace App\Controller;

use App;

class PostsController extends AppController {

    public function __construct()
    {
        // Récupérer la logique faite dans le construct parent
        parent::__construct();
        $this->loadModel('Article');
        $this->loadModel('Category');
    }

    public function index() {
        $articles = $this->Article->last();
        $categories = $this->Category->all();
        $this->render('posts.index', compact('articles','categories'));

    }

    public function category()
    {
        $category = $this->Category->find($_GET['id']);
        if($category === false) {
            $this->notFound();
        }

        $articles = $this->Article->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles','categories', 'category'));
    }

    public function show() {

        $article = $this->Article->findWithCategory($_GET['id']);
        $this->render('posts.show', compact('article'));


    }

}