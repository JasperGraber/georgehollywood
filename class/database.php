<?php
    class database
    {
        private $DB;

        private $Sql;
        private $Sql2;
        private $Sql3;
        private $Sql4;
        
        private $Query;
        private $Query2;
        private $Query3;
        private $Query4;

        function __construct($host,$db_name,$db_username,$db_password)
        {
            $this->DB = mysqli_connect($host, $db_username, $db_password, $db_name) or die ("Kan niet verbinden, er is een probleem met de connectie");
            return $this->DB;
        }

        function setData($select,$tables)
        {
            $this->Sql = 'SELECT * FROM '.$tables;
            return $this->Sql;
        }

        function getCategory()
        {
            $this->Query = mysqli_query($this->DB, $this->Sql);

            if ($this->Query) {

                echo '<table class="cat">';

                while ($result = mysqli_fetch_assoc($this->Query)) {
                    $name = $result['cat_name'];
                    $description = $result['cat_description'];

                    echo '<tr><td><b>'.$name.'</b></td><td>'.$description.'</td></tr>';
                }
                echo '</table>';
            }
            else
            {
                echo 'Geen items in Category';
            }
        }

        function getProduct()
        {
            $this->Query = mysqli_query($this->DB, $this->Sql);

            if ($this->Query) {

                echo '<table class="pro"><tbody><tr><th>Name</th><th>Discription</th><th>Allergies</th><th>Price</th><th>Period</th><th>Dish</th><th>Option</th></tr>';

                while ($result = mysqli_fetch_assoc($this->Query)) {
                    $name = $result['name'];
                    $description = $result['description'];
                    $allergies = $result['allergies'];
                    $price = '€'.$result['price'];

                    $category = $result['categoryID'];
                    if ($categorytype = !Null) {
                        $this->Sql2 = 'SELECT cat_name FROM category WHERE categoryID='.$category;
                        $this->Query2 = mysqli_query($this->DB,$this->Sql2);
                        $string = mysqli_fetch_assoc($this->Query2);
                        $categorytype = $string['cat_name'];
                    } else {
                        echo 'None';
                    }

                    $dish = $result['dishID'];
                    if ($dishtype = !Null) {
                        $this->Sql3 = 'SELECT dishname FROM dishtype WHERE dishID='.$dish;
                        $this->Query3 = mysqli_query($this->DB,$this->Sql3);
                        $string = mysqli_fetch_assoc($this->Query3);
                        $dishtype = $string['dishname'];
                    } else {
                        echo 'None';
                    }

                    $option = $result['optionID'];
                    if ($optiontype = !Null) {
                        $this->Sql4 = 'SELECT `name` FROM `option` WHERE optionID='.$option;
                        $this->Query4 = mysqli_query($this->DB,$this->Sql4);
                        $string = mysqli_fetch_assoc($this->Query4);
                        $optiontype = $string['name'];
                    } else {
                        echo 'None';
                    }

                    echo '<tr><td>'.$name.'</td><td>'.$description.'</td><td>'.$allergies.'</td><td>'.$price.'</td><td>'.$categorytype.'</td><td>'.$dishtype.'</td><td>'.$optiontype.'</td></tr>';
                }
                echo '</tbody></table>';
            }
            else
            {
                echo 'Geen items in Product';
            }
        }
    }
?>