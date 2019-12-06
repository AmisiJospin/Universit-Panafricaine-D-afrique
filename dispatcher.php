<?php
    class Dispatcher{
        public $request;

        public function __construct(){

        }
        public function dispatch(){
            $this -> request = new Request();

            Router::parseUrl($this -> request -> url , $this -> request);
            $controller = $this -> loadController();
            
            call_user_func_array([$controller, $this -> request -> action], 
                    $this -> request -> params);
        }

        public function loadController(){
            $controller_name = $this -> request -> controller ."Controller";
            $file_name = ROOT ."Controllers/". $controller_name .".php";

            require($file_name);
            $controller = new $controller_name;

            return $controller;
        }
    }