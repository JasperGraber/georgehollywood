<?php
    // Class
    class database
    {
        // Attributes
        private $DB;
        private $Sql;
        private $Query;
        private $Result;

        // Constructor
        function __construct($host,$db_name,$db_username,$db_password)
        {
            $this->DB = mysqli_connect($host, $db_username, $db_password, $db_name) or die ("Kan niet verbinden, er is een probleem met de connectie");
            return $this->DB;
        }

        // Set Methode
        function setSelect($select,$tables)
        {
            $this->Sql = 'SELECT '.$select.' FROM '.$tables;
            return $this->Sql;
        }

        // Set Methode
        function setInsert($tables,$values)
        {
            $this->Sql = 'INSERT INTO '.$tables.' VALUES '.$values;
            return $this->Sql;
        }

        // Set Methode
        function setUpdate($update,$set)
        {
            $this->Sql = 'UPDATE '.$update.' SET '.$set;
            return $this->Sql;
        }

        // Set Methode
        function setDelete($delete,$where)
        {
            $this->Sql = 'DELETE FROM '.$delete.' WHERE '.$where;
            return $this->Sql;
        }

        // Get Methode
        function getBestellijst()
        {
            $this->Query = mysqli_query($this->DB, $this->Sql);

            if ($this->Query) {

                echo '<div class="bestellijst">';

                while ($result = mysqli_fetch_assoc($this->Query)) {
                    $name = $result['name'];
                    $description = $result['description'];
                    $allergies = $result['allergies'];
                    $price = '€'.$result['price'];
                    $category = $result['categoryID'];
                    $dish = $result['dishID'];
                    $option = $result['optionID'];

                    echo '<div class="bestel-item col-3 col-lg-2"><a href="#">
                    <img src="./img/dish/'.$dish.'.png" alt="'.ucfirst($name).'" class="item-img" />
                    <h1>'.ucfirst($name).'</h1>
                    <br>
                    <span class="description">'.ucfirst($description).'</span>
                    <br>
                    <span class="price">'.$price.'</span>
                    </a></div>';
                }
                echo '</div>';

            }
            else
            {
                echo 'Geen items in Product';
            }
        }

        // Get Methode
        function getMenulijst()
        {
            $this->Query = mysqli_query($this->DB, $this->Sql);

            if ($this->Query) {

                echo '<div class="menulijst">';

                echo '<div class="menu-item menu-head">
                <h1>Product</h1>
                <span class="description"><b>What\'s in it</b></span>
                <span class="price"><b>Price</b></span>
                </div>';

                while ($result = mysqli_fetch_assoc($this->Query)) {
                    $name = $result['name'];
                    $description = $result['description'];
                    $allergies = $result['allergies'];
                    $price = '€'.$result['price'];
                    $category = $result['categoryID'];
                    $dish = $result['dishID'];
                    $option = $result['optionID'];

                    echo '<div class="menu-item">
                    <h1>'.ucfirst($name).'</h1>
                    <span class="description">'.ucfirst($description).'</span>
                    <span class="price">'.$price.'</span>
                    </div>';
                }

                echo '</div>';

            }
            else
            {
                echo 'Geen items in Product';
            }
        }

        // Get Methode
        function getCategory()
        {
            $this->Query = mysqli_query($this->DB, $this->Sql);

            if ($this->Query) {

                echo '<div class="cat">';

                while ($result = mysqli_fetch_assoc($this->Query)) {
                    $name = $result['cat_name'];
                    $description = $result['cat_description'];

                    echo '<div class="cat-item"><h1><b>'.$name.':</b></h1><div >'.$description.'</div></div>';
                }

                echo '</div>';
            }
            else
            {
                echo 'Geen items in Category';
            }
        }

        // Get Methode
        function setRegister($email,$password)
        {
            // Maak een select-query om te controleren of de gebruiker al bestaat.
            $result = mysqli_query($this->DB, $this->Sql);

            // Maak variabelen van de input uit het formulier
            $email = strtolower(sanitize($_POST["email"]));
            $wachtwoord = sanitize($_POST["password"]);
            $wachtwoord = sanitize($_POST["password"]);
        }

        // Get Methode
        function setLogin($email,$password)
        {
            // Maak een select-query om te controleren of de gebruiker al bestaat.
            $result = mysqli_query($this->DB, $this->Sql);
            
            // Als een van de velden leeg is, of allebei de velden leeg zijn.
            if (empty($email) && empty($password)){
                
                // Melding van lege velden
                echo "Er is een van de velden niet ingevuld, probeer het opnieuw";
                
                // Locatie
                header("Refresh: 3; url=./index.php?content=logon");
                
            } else if (mysqli_num_rows($result) == 1 ) {

                //gebruikersnaam bestaat, maak er een aray van
                $record = mysqli_fetch_assoc($result);
                
                // Zet wachtwoord uit database om naar variabel
                $hash = $record["password"];
                
                // als encrypt wachtwoord klopt met ingevulde wachtwoord
                if (password_verify ($password, $hash)) {
                        
                    // Selecteer userrole uit de database
                    // $userrole = $record["userrole"];
                    
                    // start de sessie met de volgende variabellen
                    session_start();

                    // variabellen
                    // $_SESSION["id"] = $record["id"];
                    $_SESSION["email"] = $record["email"];
                    $_SESSION["password"] = $record["password"];

                    var_dump($_SESSION);
                    // $_SESSION["userrole"] = $record["userrole"];
                    // $_SESSION["hoi"] = "Ik zeg Hoi!";

                    // Switch per userrole, stuur de gebruiker door naar:
                    // switch ($userrole) {
                    //     case 'klant':
                    //     header("Refresh: 0; url=../log.php?content=profiel");
                    // break;
                    //     case 'marketing':
                    //     header("Refresh: 0; url=../log.php?content=profiel");
                    // break;
                    //     case 'admin':
                    //     header("Refresh: 0; url=../log.php?content=profiel");
                    // break;
                    //     case 'root':
                    //     header("Refresh: 0; url=../log.php?content=profiel");
                    // break;
                    //     default:
                        
                    //     header("Refresh: 0; url=../index.php?content=watishet");
                    // break;
                    // }
                        
                } else {
            
                    // Melding van fout wachtwoord
                    echo "Het opgegeven wachtwoord is niet bekend, probeer het opnieuw";
                    
                    // Locatie
                    header("Refresh: 3; url=../index.php?content=inloggen");
                }
                
            } else {
                
                // gebruikersnaam bestaat niet
                echo "Opgegeven Email is onbekend, of gegevens zijn niet ingevuld";
                    
                // Locatie
                header("Refresh: 5; url=../index.php?content=inloggen");
            }

        }
    }
?>