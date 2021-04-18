<?php
    require_once './class/database.php';
    
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';

    $Login = new Head ('login','Login');
    $Login->getBanner();
    $Login->getTitle();
?>

<div class="logon">
    <a href="./index.php?content=register">Register</a>
    <form action="./index.php?content=logon_script" method="post">
        <label for="email">E-mail :</label>
        <input type="email" name="email" id="email" />
        <br>
        <label for="password" >Password :</label>
        <input type="password" name="password" id="password" />
        <br>
        <br>
        <input type="submit" value="Log in" />
    </form>
</div>