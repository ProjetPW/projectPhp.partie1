<?php

namespace Classes;

/**
 * class view
 * * handle les vue des pages
 */

 class View {

    protected $pageContent;
    
    public function __construct($pageContent = null) {
        $this->pageContent = $pageContent;
    }

    public function render($params = array()) {

        extract($params); 

        $pageContent = $this->pageContent;

        extract($params);

        include_once('views/layout.php');

    }
    
    public function redirect($route) {

        header("Location: ".HOST.$route);
        exit;
    }

}

