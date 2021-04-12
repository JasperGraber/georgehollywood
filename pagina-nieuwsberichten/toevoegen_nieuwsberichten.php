</div>
</div>
<div class="add-news-page">
    <div class="header">
        <h1>Pagina Toevoegen</h1>
        <br>
        <img src="../img/streep.svg" alt="streep" class="streep img-fluid">
    </div>
    <div class="container">
        <form class="row" action="./scripts/add_news_script.php" method="post">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Titel</label>
                <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Inleiding</label>
                <div class="col-sm-10">
                    <textarea name="introduction" class="form-control" rows="2" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Artikel</label>
                <div class="col-sm-10">
                    <textarea name="article" class="form-control" rows="4" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Afbeelding</label>
                <div class="col-sm-10">
                    <input name="image" class="form-control" type="file">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Categorie</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn">Bevestigen</button>
        </form>
    </div>
</div>