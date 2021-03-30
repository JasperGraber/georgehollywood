<?php
// session id controleren

include("./scripts/connect_db.php");

$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);
while ($record = mysqli_fetch_assoc($result)) {
    echo "<div class='row' style='border: 1px black solid; padding: 9px;'>
            <div class='col-3' style='border: 1px black solid;'>" . $record['news_image'] . "</div>
            <div class='col-3'>    
                <div class='row' style='border: 1px black solid;'>" . $record['news_title'] . "</div>
                <div class='row' style='border: 1px black solid;'>" . $record['news_introduction'] . "</div>
            </div>
            <div class='col-5' style='border: 1px black solid;;'>" . $record['news_article'] . "</div>
            <div class='col-1'>
                <div class='row'>
                    <a href='#' ><i class='bi bi-pencil-fill'></i></a>
                </div>
                <div class='row'>
                    <a href='./index.php?content=delete_news_script&id={$record["news_id"]}'><i class='bi bi-trash-fill'></i></a>
                </div>
            </div>
        </div>
        <br>";
}
