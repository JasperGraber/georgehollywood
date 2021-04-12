<?php
include("../scripts/connect_db.php");
include("../scripts/functions.php");

// Sanitize POST arrays
$title = sanitize($_POST['title']);
$introduction = sanitize($_POST['introduction']);
$article = sanitize($_POST['article']);

// Get date-time
date_default_timezone_set("Europe/Amsterdam");
$datetime = date("Y-m-d H:i:s");

// Insert into table news
$sql = "INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `news_date`, `news_introduction`, `news_article`) 
        VALUES (NULL, '$title', NULL, '$datetime', '$introduction', '$article');";

// Run query on database
if (mysqli_query($conn, $sql)) {
    header("Location: http://george-hollywood.nl/index.php?content=admin_nieuwsberichten");
}
