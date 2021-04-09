<?php
    include("./scripts/connect_db.php");
    include("./scripts/functions.php");

    $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $emailc = sanitize($_POST["email-c"]);
    $phonenumber = sanitize($_POST["phone-number"]);
    
    $sql = "INSERT INTO `customer` 
                        (`customerid`, 
                        `firstname`, 
                        `infix`, 
                        `lastname`, 
                        `phonenumber`, 
                        `email`, 
                        `loginid`) 
                    VALUES 
                        (NULL, 
                        '$firstname', 
                        '$infix', 
                        '$lastname', 
                        '$phonenumber', 
                        '$emailc', 
                        NULL);";
    if (mysqli_query($conn, $sql))
    {
        echo"test";
    }
    else{
        echo"error";
    }
?>
