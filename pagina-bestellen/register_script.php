<?php
    require_once './class/database.php';
    
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';

    $Register = new Head ('login','Register');
    $Register->getBanner();
    $Register->getTitle();

    $email = $_POST('email');
    $password1 = $_POST('password1');
    $password2 = $_POST('password2');


?>