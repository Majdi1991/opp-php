<?php
namespace App\Controllers;

class Controller{

    protected function render($templatePath,$data){

        $page = isset($_GET['page']) ? $_GET['page'] : '';
        ob_start();
        include $templatePath;
        $template = ob_get_clean();
        include "./views/layout.phtml";
    }
}