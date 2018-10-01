<?php
/**
 * Created by PhpStorm.
 * User: ubuguy
 * Date: 01/10/18
 * Time: 13:57
 */

namespace Core\Controller;

class Controller {

    protected $viewPath;
    protected $dftTemplate;

    protected function render($view, $variables = array()) {
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->dftTemplate . '.php');
    }

    protected static function notFound() {
        header("HTTP/1.0 404 Not Found", true, 404);
        header('Location: index.php?p=error');
    }

    protected function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        // TODO ajouter un header + message flash
        header('Location: index.php?p=error');

    }

}
