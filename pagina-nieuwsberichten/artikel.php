<?php
    include("./scripts/connect_db.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id WHERE news_id = $id";
    $result = mysqli_query($conn, $sql);

    if ($record = mysqli_fetch_assoc($result))
    {
        echo "<a href='./index.php?content=artikel&id={$record["news_id"]}' style='text-decoration:none;color:black;'>
                <div class='container container-article'>
                    <div class='row'>
                        <span>Laatst bewerkt op: " . $record['news_date'] . "</span>
                        <span>Categorie: " . $record['category_name'] . "</span>
                        <div class='col-3'>" . $record['news_image'] . "</div>
                        <div class='col-3'>    
                            <div class=''>" . $record['news_title'] . "</div>
                            <div class=''>" . $record['news_introduction'] . "</div>
                        </div>
                        <div class='col-5'>" . $record['news_article'] . "</div>
                    </div>
                </div>
            </a>
        <br>";
    } else { 
        echo "Artikel niet gevonden.";
    }
