<?php 
    require_once 'config/db.php';
    if ($db->connect_error) {
        die('Ошибка подключения (' . $mysqli->connect_errno . ')'.$mysqli->connect_error);
    }
    else{
        require_once 'tmp/header.php';
	    if (isset($_GET['page'])){
            $page=Router::render($_GET['page']);
        }
        else{
            $page=Router::render('index');
        }
        require_once 'tmp/footer.php'; 
    }
?>
