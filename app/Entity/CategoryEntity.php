<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 29/09/18
 * Time: 10:38
 */

namespace App\Entity;


class CategoryEntity
{

    public function getUrl() {
        return 'index.php?p=articles.category&id=' . $this->id;
    }


}