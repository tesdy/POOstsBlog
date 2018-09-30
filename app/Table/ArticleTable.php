<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 28/09/18
 * Time: 17:07
 */

namespace App\Table;

use Core\Table\Table;

/**
 * Class ArticleTable
 * @package App\Table
 */
class ArticleTable extends Table
{

    protected $table = 'article';

    /**
     * @return mixed
     */
    public function last() {
        return $this->query("
        SELECT a.id, a.titre, a.contenu, a.date, a.added_date, c.nom as cat_nom
        FROM article a
        LEFT JOIN category c on a.categorie_id = c.id
        ORDER BY a.added_date DESC 
        LIMIT 3;
        ");

    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id) {
        return $this->query("
        SELECT a.id, a.titre, a.contenu, a.date, a.added_date, c.nom as cat_nom
        FROM article a
        LEFT JOIN category c on a.categorie_id = c.id
        WHERE a.id = ?
        ", [$id], true);

    }

    /**
     * @param $cat_id
     * @return mixed
     */
    public function lastByCategory($cat_id) {
        return $this->query("
        SELECT a.id, a.titre, a.contenu, a.date, a.added_date, c.nom as cat_nom
        FROM article a
        LEFT JOIN category c on a.categorie_id = c.id
        WHERE a.categorie_id = ?
        ORDER BY a.added_date DESC 
        LIMIT 3;
        ", [$cat_id], false);
    }

}