<?php
    require_once '../config/db.php';
    global $db;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = $db->query("SELECT * FROM user WHERE email='$email'"); 
    $myrow = $login->fetch_assoc();
    $str = "Неверный логин или пароль";
    if(!empty($myrow)){
        $hash = md5($password . $salt);
        if($hash == $myrow['password']){
            setcookie('email', $myrow['email'], time()+3600*24*365, '/');
            setcookie('SESSID', md5($myrow['email'].$myrow['password']),time()+3600*24*365, '/');
            echo "Вы вошли в систему!</br> Через несколько секунд вы будете перенаправлены на главную страницу сайта!";
        }
        else{
            echo "Неверный логин или пароль";
        }
    }else{
        echo "Неверный логин или пароль";
    }
?>