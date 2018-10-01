<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 01/10/18
 * Time: 13:59
 */

namespace App\Controller;

use App;
use Core\Controller\Controller;

class AppController extends Controller {

    protected $dftTemplate = 'default';

    public function __construct()
    {
        $this->viewPath = ROOT . '/app/Views/';
    }

    protected function loadModel($model_name) {
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
}