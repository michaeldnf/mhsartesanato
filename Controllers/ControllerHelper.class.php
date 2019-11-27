<?php
    class ControllerHelper{
        public function loadView($view, $viewData = array()){
            extract($viewData);
            if(file_exists("Views/".$view.".php")){
                require ("Views/".$view.".php");
            }
        }

        public function loadTemplate($view, $viewData = array()){
            $modelHome = new ModelHome();
            $categorias = $modelHome->getCategorias();
            require("Views/Template.php");
        }

        public function loadViewInTemplate($view, $viewData = array()){
            extract($viewData);
            if(file_exists("Views/".$view.".php")){
                require ("Views/".$view.".php");
            }
        }
    }
?>
