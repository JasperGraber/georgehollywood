<?php
    include("./scripts/connect_db.php");
    include("./scripts/functions.php");

    $reservation_date = sanitize($_POST["reservation-date"]);
    $time_slot = sanitize($_POST["time-slot"]);
    $persons = sanitize($_POST["persons"]);
    
    $sql="SELECT `timeid` FROM `reservations`";

    
    if($sql = 10)
    {
        echo"deze datum zit te vol";
    }
    if (mysqli_query($conn, $sql))
    {
        $reservationid = mysqli_insert_id($conn);
        
        header("Location: http://george-hollywood.nl/index.php?content=klantgegevens&reservationid= . $reservationid . ");

    
    }
?>