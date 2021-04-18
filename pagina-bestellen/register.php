<?php
    require_once './class/database.php';
    
    $db = new database('185.104.29.76','u37477p32749_george','u37477p32749_George','@hollywood');

    require_once './class/head.php';

    $Login = new Head ('login','Register');
    $Login->getBanner();
    $Login->getTitle();
?>

<div class="logon">
    <a href="./index.php?content=logon">login</a>
    <form action="./index.php?content=register_script" method="post">
        <label for="email">E-mail :</label>
        <input type="email" name="email" id="email" />
        <br>
        <label for="password1" >Password :</label>
        <input type="password" name="password1" id="password1" />
        <br>
        <label for="password2" >Rewrite Password :</label>
        <input type="password" name="password2" id="password2" />
        <br>
        <br>
        <input type="submit" value="Register" />
    </form>
</div>