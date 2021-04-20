<?php
    // Ga naar http://185.104.29.76/phpmyadmin/ om de gezamelijke database te beheren.
    // Log dan op die pagina in met het onderstaande gebruikersnaam en wachtwoord.
    
    $servername = "localhost";
    $username = "manager";
    $password = "@marina";
    $dbname = "george-marina";
    
    //met deze functie maak je contact met de msql-server
    $conn = mysqli_connect($servername, $username , $password , $dbname);
?>