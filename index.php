<?php
    spl_autoload_register(function ($class){
        if(file_exists('Controllers/'.$class.'.class.php')){
            require('Controllers/'.$class.'.class.php');
        }elseif (file_exists('Models/'.$class.'.class.php')){
            require('Models/'.$class.'.class.php');
        }elseif (file_exists("DataBase/".$class.".class.php")){
            require ("DataBase/".$class.".class.php");
        }
    });

    $controller = new Controller();
    $controller->run();
?>