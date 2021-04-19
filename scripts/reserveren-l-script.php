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

    if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email-c"]) || empty($_POST["phone-number"]) )
    {
        header("Location: ./index.php?content=message&alert=leeg");
    } 
    else
    {
        $sql= "INSERT INTO `reservations` (`reservationid`, `timeid`, `reservationdate`, `customerid`, `persons`) VALUES (NULL, '$time_slot', '$reservation_date', NULL, '$persons');";

        $test= mysqli_query($conn,$sql);
      

        if(mysqli_query($conn,$sql))
        {
           
            $reservationid = mysqli_insert_id($conn);

            $sql= "INSERT INTO `customer` (`customerid`, `firstname`, `infix`, `lastname`, `phonenumber`, `email`) VALUES (NULL, '$firstname','$infix','$lastname', '$phone_number','$email-c');";
            
            if(mysqli_query($conn,$sql))
            {
                $customerid = mysqli_insert_id($conn);
                

                $sql="UPDATE `reservations` SET `customerid` = '$customerid' WHERE `reservations`.`reservationid` = '$reservationid';";

                if(mysqli_query($conn,$sql))
                {
                    echo"reservering geslaagd";
                }
                else
                {
                    header("Location: ./index.php?content=message&alert=reservation-faal");                }
            }
            else
            {
                header("Location: ./index.php?content=message&alert=connectie_error");
            }      
        }
        else
        {
            header("Location: ./index.php?content=message&alert=connectie_error");

        }      
    }
