<nav>
    <ul id="mainmenu">
        <li id="pc">
            <a href="./index.php?content=admin_nieuwsberichten">
                Admin
            </a>
        </li>
        <li id="pc">
            <a href="./index.php?content=menu">
                Menu
            </a>
        </li>
        <li id="pc">
            <a href="./index.php?content=start">
                Reservation
            </a>
        </li>
        <li id="pc">
            <a href="./index.php?content=bestellen">
                Order
            </a>
        </li>
        <li id="center">
            <a href="./index.php?content=home">
                <div class="svg">
                    <?php require_once("./img/logo.svg"); ?>
                </div>
            </a>
        </li>
        <li id="pc">
            <a href="./index.php?content=nieuwsberichten">
                News
            </a>
        </li>
        <li id="pc">
            <a href="./index.php?content=contact">
                Contact
            </a>
        </li>
        <?php
            if ($_GET["content"] == 'login')
            {
                echo '<li id="pc"><a href="./index.php?content=register">Register</a></li>';
            } 
            else
            {
                echo '<li id="pc"><a href="./index.php?content=login">Login</a></li>';
            }
        ?>
        <li id="pc">
            <a href="./index.php?content=user">
                User
            </a>
        </li>

        <li id="tel">
            <a href="javascript:void(0);" onclick="Menu();">
                <i class="fas fa-bars" id="menutekst"></i><span id="sub">Open Menu</span>
            </a>
            <ul id="telmenu">
                <li id="tel">
                    <a href="./index.php?content=admin_nieuwsberichten">
                        <i class="fas fa-utensils"></i>Admin
                    </a>
                </li>
                <li id="tel">
                    <a href="./index.php?content=menu">
                        <i class="fas fa-utensils"></i>Menu
                    </a>
                </li>
                <li id="tel">
                    <a href="./index.php?content=start">
                        <i class="fas fa-edit"></i>Reservation
                    </a>
                </li>
                <li id="tel">
                    <a href="./index.php?content=bestellen">
                        <i class="fas fa-biking"></i>Order
                    </a>
                </li>
                <li id="tel">
                    <a href="./index.php?content=nieuwsberichten">
                        <i class="fas fa-newspaper"></i>News
                    </a>
                </li>
                <li id="tel">
                    <a href="./index.php?content=contact">
                        <i class="fas fa-map-marked-alt"></i>Contact
                    </a>
                </li>
                <?php
                    if ($_GET["content"] == 'login')
                    {
                        echo '<li id="tel"><a href="./index.php?content=register"><i class="fas fa-key"></i>Register</a></li>';
                    } 
                    else
                    {
                        echo '<li id="tel"><a href="./index.php?content=login"><i class="fas fa-key"></i>Login</a></li>';
                    }
                ?>
            </ul>
        </li>
    </ul>
</nav>