<?php
    require_once './class/database.php';
    
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';

    $Login = new Head ('login','Login');
    $Login->getBanner();
    $Login->getTitle();
    
    $email = $_POST('email');
    $password = $_POST('password');

    $setLogin = $db->setSelect('*','login WHERE email = '.$email);
    $getLogin = $db->getCategory($email,$password);
?>