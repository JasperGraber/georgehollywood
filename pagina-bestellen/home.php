<?php
    require_once './class/head.php';

    $Home = new Head ('home','Home');
        $Home->getBanner();
        $Home->getTitle();
?>

<div class="content">
    GEORGE likes to welcome you back home. We’ve missed you.<br>
    And we know you’ve missed us too.<br>
    ‍<br>
    Can’t wait to dine al fresco on one of our sunny terraces? Sip a<br>
    rosé and enjoy our most-loved Egg Florentine, Caesar Salad,<br>
    Steak Frites or Pizza Tuna?<br>
    ‍<br>
    <em>Then make sure to make an reservation.</em>
</div>

<div class="buttons">
    <a href="./index.php?content=menu" class="button1">
        <div>
            Menu
        </div>
    </a>
    <a href="./index.php?content=start" class="button1">
        <div>
            Reservation
        </div>
    </a>
    <a href="./index.php?content=bestellen" class="button1">
        <div>
            Order
        </div>
    </a>
</div>