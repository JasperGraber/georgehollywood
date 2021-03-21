<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
        <link rel="stylesheet" href="./css/main.css" />
        <title>&copy; <?php if ( isset($_GET["p"])) { echo "George ".ucfirst($_GET["p"]); } else { echo ucfirst("George Hollywood"); } ?></title>

        <script type="text/javascript">
            function Menu() {
                let state = document.querySelector("#menutekst");
                if (state.innerHTML === "Close Menu")
                {
                    document.querySelector("#menutekst").innerHTML = "Open Menu";
                    document.getElementById("telmenu").style.display = "none";
                }
                else
                {
                    document.querySelector("#menutekst").innerHTML = "Close Menu";
                    document.getElementById("telmenu").style.display = "block";
                }
            }
        </script>
    </head>
    <body>
        <?php
            require_once("./layout/navbar.php");

            if (isset($_GET["p"]))
            {
                require_once("./page/".$_GET["p"].".php");
            } 
            else
            {
                require_once("./page/home.php");
                require_once("./layout/alert.php");
            }

            require_once("./layout/footer.php");
        ?>
    </body>
</html>