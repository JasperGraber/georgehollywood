<?php
    require_once './class/database.php';
    $db = new database('localhost','george-hollywood','manager','@hollywood');

    require_once './class/head.php';
    $Menu = new Head ('menu','Menu');
        $Menu->getBanner();
        $Menu->getTitle();
?>
<?php
    $setProduct = $db->setData('*','product');
    $getProduct = $db->getProduct();
    
    $setCategory = $db->setData('*','category');
    $getCategory = $db->getCategory();
?>