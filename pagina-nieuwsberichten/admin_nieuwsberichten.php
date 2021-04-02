</div>
</div>
<div class="news-page">
    <div class="header">
        <h1>Admin Pagina</h1>
        <img src="../img/streep.svg" alt="streep" class="streep img-fluid">
    </div>
    <div class="row">
        <div class="col-12 col-md-8 col-xl-6">
            <a href="#" class="button">Voeg artikel toe</a>
        </div>
    </div>
    <?php
    // session id controleren

    include("./scripts/connect_db.php");

    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    while ($record = mysqli_fetch_assoc($result)) {
        echo "<div class='container'>
                <div class='row'>
                    <span>Laatst bewerkt op: " . $record['news_date'] . "</span>
                    <div class='col-3'>" . $record['news_image'] . "</div>
                    <div class='col-3'>    
                        <div class=''>" . $record['news_title'] . "</div>
                        <div class=''>" . $record['news_introduction'] . "</div>
                    </div>
                    <div class='col-5'>" . $record['news_article'] . "</div>
                    <div class='col-1'>
                        <div class='row'>
                            <a href='#'><i class='bi bi-pencil-fill'></i></a>
                        </div>
                        <div class='row'>
                            <a href='./index.php?content=delete_news_script&id={$record["news_id"]}'><i class='bi bi-trash-fill'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <br>";
    }
    ?>
</div>