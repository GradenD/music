<?php
    class Router{
        public static function render($name){
            require_once __PAGES__ . $name . '.php';
        }
    }
?>