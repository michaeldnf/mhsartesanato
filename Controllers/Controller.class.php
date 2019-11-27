<?php
    class Controller{
        public function run(){
            $url = isset($_GET['url']) ? $_GET['url'] : "/";
            $url = explode('/', $url);

            $controllerAtual = "";
            $metodoAtual = "";
            $parametros = array();

            if($url[0] != ""){
                $controllerAtual = "Controller".ucfirst($url[0]);
                array_shift($url); //Elimina a primeira posição

                if (isset($url[0]) && !empty($url[0])){
                    $metodoAtual = $url[0];
                    array_shift($url);
                }else{
                    $metodoAtual = "index";
                }

                if (count($url) > 0){
                    $parametros = $url;
                }

            }else{
                $controllerAtual = "ControllerHome";
                $metodoAtual = "index";
            }

            $control = new $controllerAtual();
            call_user_func_array(array($control, $metodoAtual), array ($parametros));
        }
    }
?>