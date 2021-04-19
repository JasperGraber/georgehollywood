<?php
    require_once './class/database.php';
    
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';

    $User = new Head ('user','User Page');
    $User->getBanner();
    $User->getTitle();
?>