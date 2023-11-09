<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$car = new Car();
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
        <title>Home Admin</title>
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
                            <p class="text_revenue"><i class="fa-solid fa-signal"></i> Revenue</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell"> 1.42 Billion $</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-users"></i> Customers</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">40 Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-cart-shopping"></i> Car</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">25 Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="item-table">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            if (isset($_GET['action']) && ($_GET['action']) == 'accept') {
                                $id = $_GET['id'];
                                $st = 'accept';
                                $result = $car->updateStatus($conn, $st, $id);
                            }

                            if (isset($_GET['action']) && ($_GET['action']) == 'refuse') {
                                $id = $_GET['id'];
                                $st = 'cancel';
                                $result = $car->updateStatus($conn, $st, $id);
                            }
                            ?>
                            <table class="table">
                                <p class="pending">Pending Order</p>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Accept</th>
                                    <th>Remove</th>
                                </tr>
                                <?php
                                $st = 'pending';
                                $result = $car->showOrderPending($conn, $st);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['st'] ?></td>
                                            <td class="text-center"><a href="?action=accept&id=<?php echo $row['id'] ?>"><i class="fas fa-check-circle"></i></a></td>
                                            <td class="text-center"><a href="?action=refuse&id=<?php echo $row['id'] ?>"><i class="fas fa-times-circle"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="chart">
                            <p class="textbieudo">Car</p>
                            <canvas  id="car"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart">
                            <p class="textbieudo">Money</p>
                            <canvas  id="money"></canvas> 
                        </div>
                    </div>
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
        <script src="../js/chart.js"></script>
    </body>
</html>
