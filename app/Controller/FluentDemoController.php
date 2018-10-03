<?php
/**
 * Design pattern Fluent TESTS
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 02/10/18
 * Time: 10:56
 */

namespace App\Controller;


use Core\Database\QueryBuilder;

class FluentDemoController extends AppController
{
    public function index() {
        $query = new QueryBuilder();
        // Pattern Fluent (chaînage de méthodes)
        echo $query
            ->select('id', 'titre', 'contenu')
            ->from('articles', 'a')
            ->where('a.category_id = 1')
            ->where('toto = aumarché');
    }


}