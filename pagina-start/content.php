<div class="container">
    <?php
        if (isset($_GET['content'])) 
        {
            if (file_exists('pagina-start/' . $_GET['content'] . '.php')) {
                require_once('pagina-start/' . $_GET['content'] . '.php');
            }
            elseif (file_exists('scripts/' . $_GET['content'] . '.php'))
            {
                require_once('scripts/' . $_GET['content'] . '.php');
            }
            elseif (file_exists('pagina-reserveren/' . $_GET['content'] . '.php'))
            {
                require_once('pagina-reserveren/' . $_GET['content'] . '.php');
            }
            elseif (file_exists('pagina-nieuwsberichten/' . $_GET['content'] . '.php'))
            {
                require_once('pagina-nieuwsberichten/' . $_GET['content'] . '.php');
            }
            elseif (file_exists('pagina-bestellen/' . $_GET['content'] . '.php'))
            {
                require_once('pagina-bestellen/' . $_GET['content'] . '.php');
            }
            elseif (file_exists('pagina/' . $_GET['content'] . '.php'))
            {
                require_once('pagina/' . $_GET['content'] . '.php');
            }
        }
        else
        {
            include_once('pagina/home.php');
        }
    ?>
</div>