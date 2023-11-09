<?php
require_once '../connection.php';
require_once '../textcar.php';
$addproduct = new Car();
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
        <div class="container-fuild container_admin">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="../admin/admin.php">
                         
                            <a href="../admin/Information.php"><span class="title">Porsche</span></a>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/admin.php">
                            <span class="icon"><i class="fas fa-th-large 1icon"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/productadmin.php">
                            <span class="icon"><i class="fas fa-car 1icon"></i></span>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/Customer.php">
                            <span class="icon"><i class="fas fa-solid fa-users 1icon"></i></span>
                            <span class="title" >Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/Order.php">
                            <span class="icon"><i class="fa-solid fa-clipboard-list 1icon"></i></span>
                            <span class="title">Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/Analytic.php">
                            <span class="icon"><i class="fa-solid fa-chart-line 1icon"></i></span>
                            <span class="title">Analytic</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/Message.php">
                            <span class="icon">  <i class="fa-solid fa-message 1icon"></i></span>
                            <span class="title">Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/addproduct.php">
                            <span class="icon"> <i class="fa-solid fa-plus 1icon"></i></span>
                            <span class="title">Add Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/addemployee.php">
                            <span class="icon"> <i class="fa-solid fa-plus 1icon"></i></span>
                            <span class="title">Employee</span>
                        </a>
                    </li>
                    <li>
                        <a href="../src/login.php">
                            <span class="icon"><i class="fa-solid fa-right-from-bracket 1icon"></i></span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>

        
    </body>
    </html>