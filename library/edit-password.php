<?php
    require_once '../config/db.php';
    require_once '../library/check.php'; 
    global $db;
    global $usrId;
    $new_pas = $_POST['new-password'];
    $confirm = $_POST['confirm'];
    $password = $_POST['password'];
    $id = $db->query("SELECT * FROM user WHERE id='$usrId'"); 
    $myrow = $id->fetch_assoc();
    $hash = md5($password . $salt);
    if(!empty($myrow)){
        if ($new_pas == $confirm){
            if($hash == $myrow['password']){
                $new_hash = md5($new_pas . $salt);
                $c=$db->query("UPDATE `user` SET password='$new_hash' WHERE id='$usrId' ");
                echo 'Все ОК!';
            }else{
                echo 'Проверьте все поля!';
            }
        }else{
            echo 'Проверьте все поля!';
        }
    }else{
        echo 'ERROR';
    }
?>