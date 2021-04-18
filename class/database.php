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
    }
?>