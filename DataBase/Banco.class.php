<?php
    class Banco{
        private static $DSN = "mysql:dbname=mhsartesanato;host=localhost";
        private static $USER = "root";
        private static $PASS = "";
        private static $instance;

        public static function instanciar(){
            if(!self::$instance){
                try{
                    self::$instance = new PDO(self::$DSN, self::$USER, self::$PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                }catch (Exception $e){
                    $e->getMessage();
                    die();
                }
            }
            return self::$instance;
        }
    }
?>
