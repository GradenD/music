<?php

if(isset($_POST['musicid']))
{
    $uid = $_POST['musicid'];
    //echo $uid;

    require_once '../config/db.php';
    require_once '../library/check.php'; 
    require_once '../action/user-info.php'; 
    global $db;
    global $usrId;
    global $auth;
    if ($auth){
        $q = $db->query("SELECT * FROM music_autor WHERE id=$uid");
        if($q) {
            $arr = [];
            $i=0;
            while($r=$q->fetch_assoc()){
                $arr[$i]=$r;
                $i++;
            }
            foreach($arr as $key=>$value){
                $k=$value['autor'];
                $autor= $db->query("SELECT * FROM author WHERE id=$k"); 
                $artist = $autor->fetch_assoc();
                $emp = $artist["name"];
                //переменные для заполнения
                $file = $value['mp3'];
                $tytle = $value['tytle'];
                $artist = $emp;
                $poster = $value['img'];
            }
            $query=$db->query("
                INSERT INTO music_profile (user, url, img, tytle, autor) VALUES ('$usrId', '$file', '$poster', '$tytle', '$artist')
            ");
            if ($query){
                //все збс
            }else{
                echo 'ERROR!';
            }
        }
    }else{
        echo 'Доступно только авторизованным пользователям!';
    }    
}

?>