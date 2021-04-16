<?php
    // Ga naar http://185.104.29.76/phpmyadmin/ om de gezamelijke database te beheren.
    // Log dan op die pagina in met het onderstaande gebruikersnaam en wachtwoord.
    
    $servername = "185.104.29.76";
    $username = "u37477p32749_George";
    $password = "@hollywood";
    $dbname = "u37477p32749_george";
    
    //met deze functie maak je contact met de msql-server
    $conn = mysqli_connect($servername, $username , $password , $dbname);
?>