<?php 
    require_once '../config/db.php';
	require_once '../library/check.php'; 
    require_once '../action/user-info.php'; 
    
    global $db;
    global $usrId;
    $file = $_POST['info-file'];
    $tytle = $_POST['tytle-treck'];
    $artist = $_POST['artist'];
    $poster = $_POST['poster-otvet'];

    $query=$db->query("
        INSERT INTO music_profile (user, url, img, tytle, autor) VALUES ('$usrId', '$file', '$poster', '$tytle', '$artist')
    ");
    if ($query){
        echo "Complite!";
    }else{
        echo 'ERROR!';
    }
?>