<div class="nieuwsberichten" style="background-image:url('../img/news_banner.jpg');background-repeat:no-repeat;background-attachment:fixed;min-height:50vh;"></div>
<div class="container">
    <a href="./index.php?content=admin_nieuwsberichten">admin pagina</a>
    <?php
    include("./scripts/connect_db.php");

    $sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id";
    $result = mysqli_query($conn, $sql);

    while ($record = mysqli_fetch_assoc($result)) {
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
    }
    ?>
    <p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p><p>test</p>
</div>