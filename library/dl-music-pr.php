<?php

if(isset($_POST['musicid']))
{
    $uid = $_POST['musicid'];
    //echo $uid;

    require_once '../config/db.php';
    require_once '../library/check.php'; 
    global $db;
    $c=$db->query("DELETE FROM `music_profile` WHERE id='$uid'");
}

?>