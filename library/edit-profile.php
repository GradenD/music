<?php
    require_once '../config/db.php';
    require_once '../library/check.php'; 
    global $db;
    global $usrId;
    $name = $_POST['username'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $skype = $_POST['skype'];
    $instagram = $_POST['instagram'];
    $id = $db->query("SELECT * FROM user WHERE id='$usrId'"); 
    $myrow = $id->fetch_assoc();
    if(!empty($myrow)){
        if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
            $c=$db->query("UPDATE `user` SET name='$name', lastname='$LastName', phone='$phone', email='$email', country='$country', skype='$skype', instagram='$instagram' WHERE id='$usrId' ");
            echo 'Все ОК!';
        }else{
            echo 'Адрес указан не правильно.';
        }
    }else{
        echo 'ERROR';
    }
?>