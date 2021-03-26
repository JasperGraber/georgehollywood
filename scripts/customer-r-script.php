<?php

if(empty($_POST["firstname"]) && empty($_POST["achternaam"]) && empty($_POST["email-c"]) && empty($_POST["phone-number"]))
{
    header("Location: ./index.php?content=message&alert=leeg");
}

?>