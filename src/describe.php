<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$classer = new Car();
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
        <?php
        if (isset($_SESSION['user']) && ($_SESSION['user'])) {
            if (isset($_GET['action']) && ($_GET['action'] == 'add')) {
                $id = intval($_GET["id"]);
                $_SESSION['id_product'] = $id;
                if (isset($_SESSION[$_SESSION['user']][$id])) {
                    $_SESSION[$_SESSION['user']][$id]['quantity']++;
                } else {
                    $result = $classer->findProduct($conn, $id);
                    $row = $result->fetch_assoc();
                    if (isset($row['IDCt'])) {
                        $_SESSION[$_SESSION['user']][$row['IDCt']] = array('name' => $row['NameCar'], "quantity" => 1, "price" => $row['Standardprice'], "image" => $row['img']);
                    }
                }
            }
        } else {
            echo '<script>alert("Please login!")</script>';
            echo '<script>window.location=../src/login.php</script>';
        }
        ?>
        <div class="container">
            <?php
            if (isset($_SESSION[$_SESSION["user"]]) && $_SESSION[$_SESSION["user"]]) {
                $total_quantity = 0;
                $total_price = 0;
                foreach ($_SESSION[$_SESSION["user"]] as $id => $value) {
                    $arrProductID[] = $id;
                }
                $strIDs = implode(",", $arrProductID);
                $result = $classer->findProduct($conn, $strIDs);
                while ($row = $result->fetch_assoc()) {
                    $total_quantity += $row['quantity'];
                    $total_price += $row['Standardprice'] * $_SESSION[$_SESSION["user"]][$row['IDCt']]['quantity'];
                }
            }
            ?>
            <div class="row">
                <div class="col-lg-12">

                    <p class="description-title">Specifications</p>
                </div>
            </div>
            <?php
            $id = $_GET['id'];
            $result = $classer->showDetails($conn, $id);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="row MS">
                        <div class="col-lg-6">
                            <img src="<?php echo $row['img'] ?>">
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="wattage">Wattage</p>
                                    <p class="wattage">Maximum torque</p>
                                    <p class="wattage">Acceleration</p>
                                    <p class="wattage">Max speed</p>
                                    <p class="wattage">Fuel consumption</p>
                                    <p class="wattage">Standard price</p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="number"><?php echo $row['Wattage'] ?></p>
                                    <p class="number"><?php echo $row['Maximumtorque'] ?></p>
                                    <p class="number"><?php echo $row['Acceleration'] ?></p>
                                    <p class="number"><?php echo $row['Maxspeed'] ?>km/h</p>
                                    <p class="number"><?php echo $row['Fuelconsumption'] ?>m<sup>3</sup></p>
                                    <p class="number"><?php echo $row['Standardprice'] ?> $</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="padding: 0">
                                    <a class="btn btn-danger orders"href="describe.php?action=add&id=<?php echo $row['IDCt']?>">Oder Car</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="description-title">Outstanding Features</p>
            </div>
        </div>
        <div class="row">
            <?php
            $id = $_GET['id'];
            $iddm = 0;

            if ($id == 1 || $id >= 10 && $id <= 15) {
                $iddm = 1;
            } else if ($id >= 2 && $id <= 4 || $id >= 16 && $id <= 19) {
                $iddm = 3;
            } else if ($id >= 5 && $id <= 9 || $id >= 20 && $id <= 23) {
                $iddm = 4;
            } else if ($id == 25 || $id == 24) {
                $iddm = 2;
            }
            $dics = $classer->showDiscover($conn, $iddm);
            foreach ($dics as $items) {
                echo '<div class="col-lg-4">
                    <div class="outstanding_features">
                        <img class="img_ft" src="' . $items['img'] . '">
                        <p class="">idea</p>
                        <p class="content_desc">' . $items['DescribeT'] . '</p>
                        <a class="btn btn-dark" href="discover.php?action?discover&id=' . $items['IDTT'] . '">Discover</a>
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="outstanding_features">
                        <img class="img_ft" src="' . $items['img2'] . '">
                        <p class="">idea</p>
                        <p class="content_desc">' . $items['DescribeT2'] . '</p>
                        <a class="btn btn-dark" href="discover.php?action?discover&id=' . $items['IDTT'] . '">Discover</a>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="outstanding_features">
                        <img class="img_ft" src="' . $items['img3'] . '">
                        <p class="">idea</p>
                        <p class="content_desc">' . $items['DescribeT3'] . '</p>
                        <a class="btn btn-dark" href="discover.php?action?discover&id=' . $items['IDTT'] . '">Discover</a>
                    </div>
                    
                </div>
                
                
';
            }
            ?>
        </div>
    </div>
    <?php
    require_once '../layout/footer.php';
    ?>

</body>
</html>
