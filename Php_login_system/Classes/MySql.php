<?php

    class MySql {

        private static $pdo;
        private static $HOST = 'localhost';
        private static $USER = 'root';
        private static $PASSWORD = '';
        private static $DATABASE = 'LoginSis';
        
        public static function Connect() {
            if(self::$pdo == null){
              try {

                self::$pdo = new PDO('mysql:host='.self::$HOST.';dbname='.self::$DATABASE,self::$USER,self::$PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              }catch(Exception $e) {
                echo 'Error connecting to the database';
              }
            }
            return self::$pdo;        
        }
    }

?>