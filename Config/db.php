<?php
    class Database{
        private static $pdo = null ;
        public function __construct(){

        }
        public static function getDatabaseInstance(){
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=localhost; dbname=UNIPAN", "root", "");
                //self::$pdo -> setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_WARNING);
            }
            return self::$pdo;
        }
    }