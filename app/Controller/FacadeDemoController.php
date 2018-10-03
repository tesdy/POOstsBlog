<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 02/10/18
 * Time: 11:19
 */

namespace App\Controller;

class FacadeDemoController
{
    public function index() {
        require ROOT . '/app/Controller/FacadeDemoQuery.php';
        // Pattern Fluent (chaînage de méthodes)
        echo FacadeDemoQuery::select('id', 'titre', 'contenu')
            ->from('articles', 'a')
            ->where('a.category_id = 1')
            ->where('toto = aumarché');
    }

}