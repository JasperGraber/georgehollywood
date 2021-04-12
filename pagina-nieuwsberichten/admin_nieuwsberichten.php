</div>
</div>
<div class="news-page">
    <div class="header">
        <h1>Admin Pagina</h1>
        <br>
        <div class="row">
            <img src="../img/streep.svg" alt="streep" class="streep img-fluid">
        </div>
    </div>
    <div class="container container-button">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-5">
                <a href="index.php?content=toevoegen_nieuwsberichten" class="button">Voeg artikel toe</a>
            </div>
            <div class="col-12 col-md-6 col-xl-5">
                <a href="index.php?content=admin_categorie" class="button">Categorieën beheren</a>
            </div>
        </div>
    </div>
    <?php
    include("./scripts/connect_db.php");

    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    while ($record = mysqli_fetch_assoc($result)) {
        switch ($record['category_id']) {
            case '1':
                $category = "Social Media";
                break;
            case '2':
                $category = "Menu";
                break;
            case '3':
                $category = "Toegankelijkheid";
                break;
        }

        echo "<div class='container container-article'>
                <div class='row'>
                    <span>Laatst bewerkt op: " . $record['news_date'] . "</span>
                    <span>Categorie: " . $category . "</span>
                    <div class='col-3'>" . $record['news_image'] . "</div>
                    <div class='col-3'>    
                        <div class=''>" . $record['news_title'] . "</div>
                        <div class=''>" . $record['news_introduction'] . "</div>
                    </div>
                    <div class='col-5'>" . $record['news_article'] . "</div>
                    <div class='col-1'>
                        <div class='row'>
                            <a href='./index.php?content=aanpassen_nieuwsberichten&id={$record["news_id"]}'><i class='bi bi-pencil-fill'></i></a>
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