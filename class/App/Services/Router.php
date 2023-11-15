<?php

namespace App\Services;

class Router{
    private $page;

    public function __construct(){
        $this->setpage();
    }

    public function setpage(){
        $this->page = isset ($_GET['page']) ? strtolower($_GET['page']) : 'home';
    }
    public function getpage() {

        return $this->page;

      }
        
    }
