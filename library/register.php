<?php
    require_once '../config/db.php';
    global $db;
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $query = $db->query("SELECT id FROM user WHERE email='$email'");
    $myrow = $query->fetch_assoc();
    if (!empty($myrow['id'])){
        echo 'Email занят';
    }
    else{ 
        if ($password == $confirm){
            if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
                $pass = md5($password . $salt);
                $query = $db->prepare("
                    INSERT INTO user(name, email, password) VALUES (?, ?, ?)
                ");
                $query->bind_param("sss", $name, $email, $pass);
                $query->execute();
                if ($query){
                    echo 'Вы успешно зарегистрированны!';
                }else{
                    echo 'При регистрации возникла ошибка!';
                }
            }else{
                echo 'Адрес указан не правильно.';
            }
        }else{
            echo 'Пароли не совпадают!';
        }
    }
?>