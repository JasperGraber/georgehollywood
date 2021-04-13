<?php
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