<?php
    function debug($arr){
        echo "<pre>".print_r($arr, true)."</pre>";
    }
    require_once 'config/cfg.php';
    require_once __CFG__ . 'db.php';
    require_once __LIB__ . 'router.php';
    require_once __LIB__ . 'service.php';
?>