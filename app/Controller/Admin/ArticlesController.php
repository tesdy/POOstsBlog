<?php

namespace App\Controller\Admin;


class ArticlesController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel("Article");
    }


    public function index()
    {
        $articles = $this->Article->all();
        $this->render('admin.posts.index', compact('articles'));


    }

    public function error()
    {
        $this->render('error');
    }
}