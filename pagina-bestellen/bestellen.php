<?php
    require_once './class/database.php';
    
    $db = new database('localhost','george-hollywood','manager','@hollywood');

    require_once './class/head.php';

    $Order = new Head ('order','Bestellen');
        $Order->getBanner();
        $Order->getTitle();
?>