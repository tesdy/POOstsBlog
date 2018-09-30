<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 29/09/18
 * Time: 10:13
 */

namespace App\Entity;

use Core\Entity\Entity;

class ArticleEntity extends Entity
{



    public function getUrl() {
        return 'index.php?p=posts.show&id=' . $this->id;
    }

    public function getExtrait() {
        $html = '<p>' . substr($this->contenu, 0, 200) . '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a>';
        return $html;
    }



}