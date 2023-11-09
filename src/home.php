                                             
2<?php
session_start();
require_once '../textcar.php';
require_once '../connection.php';
$logincar = new Car();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title></title>
    </head>
    <body>
        <div id="main"> 
            <?php
            require_once '../layout/header.php';
            ?>
        </div>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-cou" src="../img/discover02.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                    <img class="img-cou" src="../img/discover01.jpg" alt="Chicago" >
                </div>
                <div class="carousel-item">
                    <img class="img-cou" src="../img/discover03.jpg" alt="New York">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-box">
                            <a href=""><i class="fa-solid fa-car icon-car"></i></a>
                            <p class="content-title-box">New Car</p>
                        </div>
                        <div class="content-box-list">
                            <a href=""><i class="fa-solid fa-clipboard-list icon-price"></i></i></a>
                            <p class="content-title-box-list">Price List</p>
                        </div>
                        <div class="content-box-Contact">
                            <a href=""><i class="fa-solid fa-user-group icon-Contact"></i></i></a>
                            <p class="content-title-box-Contact">Contact</p>
                        </div>
                        <div class="content-box-Focus">
                            <a href=""><i class="fa-regular fa-gem icon-Focus"></i></i></a>
                            <p class="content-title-box-Focus">Focus</p>
                        </div>                     
                    </div>
                </div>
            </div>
            <h1 class="Vehicle_lines">Vehicle lines</h1>
            <div class="container">
                <div class="row">
                    <?php
                    require_once '../connection.php';
                    require_once '../textcar.php';
                    $carx = new Car();
                    $product = $carx->showProduct($conn);
   
                    foreach ($product as $item) {
                        echo '
                            <div class="col-md-4">
                                <div class="graden-items">
                                    <img src="' . $item['img'] . '" class="graden-img" alt="">
                                    <p class="graden-address graden-address-first"><b>CarName: </b>' . $item['carname'] . '
                                    </p>
                                    <p class="graden-area"><b>details: </b>' . $item['details'] . '</p>
                                    <p class="graden-type"><b>speed: </b> ' . $item['speed'] . ' km/h</p>
                                    <p class="graden-trees"><b>price: </b>' . $item['price'] . ' VND </p>
                                    <p class="graden-main"><b>guarantee: </b>' . $item['guarantee'] . ' Year</p>
                                <a class="graden-btn btn btn-primary local-ver" href="poduct.php">Detail</a>
                        </div>
                    </div>
                ';
                    }
                    ?>
                 
                </div>
            </div>
            <h1 class="BK">Booking</h1>
            <div class="container-fuild">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe class="ggmap"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7799146314815!2d106.73094527481793!3d10.751438159654626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525965549a1ad%3A0x2038285876188496!2zUG9yc2NoZSBTw6BpIEfDsm4!5e0!3m2!1sen!2s!4v1692263625022!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6 contact-local">
                        <form>
                            <input class="contactcar-address-first-name" type="text" placeholder="Name">
                            <input class="contact-email" type="text" placeholder="Email">
                            <textarea class="contact-sub" rows="6" placeholder="Subject"></textarea>
                            <textarea class="contact-mess" rows="6" placeholder="Message"></textarea>
                            <input type="submit" value="Send" class="btn btn-primary contact-btn-send">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once '../layout/footer.php';
    ?>

</body>
</html>
