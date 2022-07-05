<?php
    if (isset($_GET['content'])) 
    {
        if (file_exists('pagina-start/' . $_GET['content'] . '.php')) {
            require_once('pagina-start/' . $_GET['content'] . '.php');
        }
        elseif (file_exists('pagina/' . $_GET['content'] . '.php'))
        {
            require_once('pagina/' . $_GET['content'] . '.php');
        }
    }
    else
    {
        require_once('pagina/home.php');
    }
?>