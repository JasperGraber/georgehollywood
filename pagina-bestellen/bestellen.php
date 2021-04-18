<?php
    require_once './class/database.php';
    
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';

    $Order = new Head ('order','Bestellen');
        $Order->getBanner();
        $Order->getTitle();

    $setProduct = $db->setSelect('*','product');
        $getProduct = $db->getBestellijst();
    
    $setCategory = $db->setSelect('*','category');
        $getCategory = $db->getCategory();
?>