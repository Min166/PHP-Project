<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$productadmin = new Car();
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
        <title>Product Admin</title>
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
                            <p class="text_revenue"><i class="fa-solid fa-eye"></i> View</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell"> 529 Viewer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-car-side"></i> Car</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">25 Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-cart-shopping"></i> Quantity</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">63 Products</p>
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
                <div class="col-lg-6">
                    <P class="nameproduct">Product Details</P>
                </div>
                <div class="col-lg-6">
                    <div class="btnaddNew">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <input name="poro" class="tsst"placeholder="Product">
                            <input name="search" type="submit" class="btn-primary nut" value="Search">
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                if (isset($_GET['action']) && ($_GET['action'] == 'delete')) {
                    $id = $_GET['id'];
                } else {
                    $id = 0;
                }
                $query = $productadmin->deleteproductAdmin($conn, $id);
                ?>
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <tr>
                            <th class="ghsda">ID </th>
                            <th class="ghsda">Name Car</th>
                            <th class="ghsda">Wattage</th>
                            <th class="ghsda">Maximum torque</th>
                            <th class="ghsda">Acceleration</th>
                            <th class="ghsda">Max speed</th>
                            <th class="ghsda">Fuel consumption</th>
                            <th class="ghsda">Price</th>
                            <th class="ghsda">Image</th>
                            <th class="ghsda">Edit</th>
                            <th class="ghsda">Delete</th>
                        </tr>
                        <tr>
                            <?php
                            if (isset($_POST['search']) && ($_POST['search'])) {
                                $key = $_POST['poro'];
                            } else {
                                $key = 1;
                            }
                            $result = $productadmin->showproductAdmin($conn, $key);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <td class="ghsda"><?php echo $row['IDCt'] ?></td>
                                    <td class="ghsda"><?php echo $row['NameCar'] ?></td>
                                    <td class="ghsda"><?php echo $row['Wattage'] ?></td>
                                    <td class="ghsda"><?php echo $row['Maximumtorque'] ?></td>
                                    <td class="ghsda"><?php echo $row['Acceleration'] ?></td>
                                    <td class="ghsda"><?php echo $row['Maxspeed'] ?> km/h</td>
                                    <td class="ghsda"><?php echo $row['Fuelconsumption'] ?>m<sup>3</sup></td>
                                    <td class="ghsda"><?php echo $row['Standardprice'] ?> $</td>
                                    <td><img  class="itasd"src="<?php echo $row['img'] ?>"></td>

                                    <td class="tyui"><a href="editproduct.php?action=edit&id=<?php echo $row['IDCt'] ?>"><i class="fas fa-pen"></i></a></td>
                                    <td class="tyui"><a href="productadmin.php?action=delete&id=<?php echo $row['IDCt'] ?>"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </table>
                </div>
            </div>

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
