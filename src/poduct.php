<?php
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
        <p class="Mu">Menu</p>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <ul class="list-category">
                        <li><a class="link-filter catalog_1" href="poduct.php?action?product&id=0">Category</a></li>
                        <li class="list-link"><a class="link-filter" href="poduct.php?action?product&id=1">718</a></li>
                        <li class="list-link"><a class="link-filter" href="poduct.php?action?product&id=2">taycan_1</a></li>
                        <li class="list-link"><a class="link-filter" href="poduct.php?action?product&id=3">911</a></li>
                        <li class="list-link"><a class="link-filter" href="poduct.php?action?product&id=4">Panamera</a></li>
                    </ul>
                </div>

                <div class="col-lg-10">
                    <div class="row">
                        <?php
                        require_once '../connection.php';
                        require_once '../textcar.php';
                        $carx = new Car();
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            $id = $_GET['id'];
                        } else {
                            $id = 0;
                        }
                     
                        $product = $carx->showMenu($conn, $id);
                        foreach ($product as $item) {
                            echo '
                            <div class="col-lg-4">
                                <div class="car-items">
                                    <img src="' . $item['img'] . '" class="car-img" alt="">
                                    <p class="car-address car-address-first">' . $item['NameCar'] . '
                                    </p>
                                 
                                    <p class="car-trees">' . $item['Standardprice'] . ' $ </p>
                                
                                <a class="car-btn local-ver" name="id" href="describe.php?action=details&id=' . $item['IDCt'] . '">Detail</a>
                        </div>
                    </div>
                ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <?php
        require_once '../layout/footer.php';
        ?>
    </body>
</html>
