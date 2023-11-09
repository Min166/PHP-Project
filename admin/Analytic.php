<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$Order = new Car();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style_admin.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Order Admin</title>
    </head>
    <body>
        <?php
        require_once '../layout/homeadmin.php';
        ?>
        <!-- main-->
        <div class="main-admin">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>


                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    </label>

                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-user-plus"></i> Best Seller</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">16 911</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-user-minus"></i> Slow</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">3 taycan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-chart-simple"></i> revenue</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell"> 1,2B $</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="chart">
                            <p class="textbieudo">Views</p>
                            <canvas  id="view"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart">
                            <p class="textbieudo">Quantity</p>
                            <canvas  id="quantity"></canvas> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

              
            </div>

            <script>

                //            menu
                let toggle = document.querySelector('.toggle');
                let navigation = document.querySelector('.navigation');
                let mainadmin = document.querySelector('.main-admin');

                const list = document.querySelectorAll('.navigation li');
                function activelink() {
                    list.forEach((item) =>
                        item.classList.remove('hovered'));
                    this.classList.add('hovered');
                }
                list.forEach((item) =>
                    item.addEventListener('mouseover', activelink));


                toggle.onclick = function () {
                    navigation.classList.toggle('active');
                    mainadmin.classList.toggle('active-main');
                };
            </script>
            <script src="../js/poductadmin.js"></script>
    </body>
</html>
