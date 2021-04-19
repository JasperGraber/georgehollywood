<!doctype html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Required Link Tags -->
    <link rel="shortcut icon" href="./img/icons/icon.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&amp;display=swap" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Required Script Tags -->
    <script type="text/javascript" src="./js/menu.js"></script>

    <!-- Title of the Page -->
    <title>&copy; <?php if ( isset($_GET["content"])) { echo "George ".ucfirst($_GET["content"]); } else { echo ucfirst("George Hollywood"); } ?></title>
  </head>

  <body>
    <header>
      <?php require_once("./pagina-start/navbar.php"); ?>
    </header>

    <content>
      <?php include("./pagina-start/content.php"); ?>
    </content>

    <footer>
      <?php require_once("./pagina-start/footer.php"); ?>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>