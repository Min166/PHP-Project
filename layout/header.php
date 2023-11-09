
<div id="header">
    <div class="container-fuild">
        <div class="row">
            <div class="col-lg-5">
                <a href="#" id="logo"><img class="img-logo" src="../img/logo.png"></a>
            </div>
            <div class="col-lg-7">

                <ul id ="main-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="poduct.php">Menu</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="focus.php">Focus</a></li>
                    <?php
                    if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                        $header = "";
                        
                    echo' <li><a href="profile.php">Profile</a></li><li><a class="asdguh" href="../src/ordercustomer.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                         <li><a href="./logout.php"> <i class="fa-solid fa-power-off"></i></a></li>';
                    } else {
                        $header = "Login";
                        unset($_SESSION['user']);
                    }
                    ?>
                    <li><a class="sada" href="login.php"><?php echo $header ?></a></li>               
                </ul>
            </div>
        </div>
    </div>
</div>
