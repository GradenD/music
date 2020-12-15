<?php
    setcookie('login','', time()-3600, '/');
    setcookie('SESSID', '', time()-3600, '/');
    header('location:../index.php');
?>