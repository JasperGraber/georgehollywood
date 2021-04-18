<?php
include("../scripts/connect_db.php");
include("../scripts/functions.php");

// Sanitize POST arrays
$category = sanitize($_POST['category']);

// Insert into table news
$sql = "INSERT INTO `categories` (`category_id`, `category_name`) 
        VALUES (NULL, '$category');";

// Run query on database
if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php?content=admin_categorie");
}