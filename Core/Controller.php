<?php
    class Controller{
        var $vars = [];

        public function set($data){
            $this -> vars = array_merge($this -> vars, $data);
        }
        public function renderViews($filename){
            extract($this -> vars);
            ob_start();
            require(ROOT ."Views/". $filename .".php");
           // $content_for_layout = ob_get_clean();

           // $content_for_layout;

        }
    }