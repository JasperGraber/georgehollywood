<?php
$alert= (isset($_GET["alert"]))? $_GET["alert"]: "default";
echo"$alert";
switch($_GET["alert"])
{
    case 'leeg' :
        echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                U heeft geen email ingevuld, probeer het opnieuw...
            </div>';
        header("Refresh: 3; url=./index.php?content=klantgevens");
    break;
    
    default:
    echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
    U heeft geen email ingevuld, probeer het opnieuw...
</div>';
header("Refresh: 3; url=./index.php?content=klantgevens");
    break;
  
}

?>