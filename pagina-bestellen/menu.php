<?php
    require_once './class/database.php';
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';
    $Menu = new Head ('menu','Menu');
    $Menu->getBanner();
    $Menu->getTitle();

    $setProduct = $db->setSelect('*','product');
    $getProduct = $db->getMenulijst();
    
    $setCategory = $db->setSelect('*','category');
    $getCategory = $db->getCategory();
?>