<?php
    $alert= (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id= (isset($_GET["id"]))? $_GET["id"]: "";
    $pwh= (isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $reservationid= (isset($_GET["reservationid"])) ? $_GET["reservationid"]: "";

    switch($_GET["alert"])
    {
        case 'leeg' :
            echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                    U heeft niet alles ingevuld, probeer het opnieuw...
                </div>';
            header("Refresh: 3; url=./index.php?content=reserveren_lunch");
        break;
        case 'connectie_error' :
            echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                    Er is een technische storing, probeer het opnieuw...
                </div>';
            header("Refresh: 3; url=./index.php?content=reserveren_lunch");
        break;
        case 'reservation-faal' :
            echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                    Helaas er is iets fout gegaan, probeer het opnieuw.
                </div>';
            header("Refresh: 3; url=./index.php?content=reserveren_lunch");
        break;

    }
?> 