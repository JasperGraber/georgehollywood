<?php
    include("./scripts/connect_db.php");
    include("./scripts/functions.php");

    $reservation_date = sanitize($_POST["reservation-date"]);
    $time_slot = sanitize($_POST["time-slot"]);
    $persons = sanitize($_POST["persons"]);
    $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $email = sanitize($_POST["email-c"]);
    $phone_number = sanitize($_POST["phone-number"]);

    $sql= "INSERT INTO `reservations` (`reservationid`, `timeid`, `reservationdate`, `customerid`, `persons`) VALUES (NULL, '$time_slot', 'reservation_date', NULL, '$persons');";
    
    if(mysqli_query($conn,$sql))
    {
    
    }
    else
    {
        echo"faal";
    }
?>