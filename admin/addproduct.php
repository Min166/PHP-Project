<?php
session_start();
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
        <link rel="stylesheet" href="../css/style_createCus.css">
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

            <div class="row">
                <div class="col-lg-12">
                    <P class="nameproduct">Add Product</P>
                </div>
            </div> 
            <div class="row">
                <?php
                if (isset($_POST['add']) && ($_POST['add'])) {
                    $name = $_POST['name'];
                    $wattage = $_POST['wattage'];
                    $maximum_torque = $_POST['maximum_torque'];
                    $acceleration = $_POST['acceleration'];
                    $max_speed = $_POST['max_speed'];
                    $fuel_consumption = $_POST['fuel_consumption'];
                    $price = $_POST['price'];

                    $errror = [];
                    $file = $_FILES['imageFiles'];
                    $size_allow = 10;
                    $filename = $file['name'];
                    $filename = explode('.', $filename);
                    $ext = end($filename);
                    $new_file = md5(uniqid()) . '.' . $ext;
                    $allow_ext = ['png', 'jpg', 'jpeg'];
                    $img_final = "../img/uploads/" . $new_file;
                    if (in_array($ext, $allow_ext)) {
                        $size = $file['size'] / 1024 / 1024;
                        if ($size <= $size_allow) {
                            $upload = move_uploaded_file($file['tmp_name'], '../img/uploads/' . $new_file);
                            if (!$upload) {
                                $errror[] = 'upload_err';
                            }
                        } else {
                            $errror[] = 'size_err';
                        }
                    } else {
                        $errror[] = 'ext_err';
                    }

                    $result = $addproduct->addproduct($conn, $name, $wattage, $maximum_torque, $acceleration, $max_speed, $fuel_consumption, $price, $img_final);
                    echo '<script>alert("Create Product Successfully"); window.location = "productadmin.php";</script>';
                    }
                ?>
                <div class="col-lg-12">


                    <form class="AddProduct" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <div class="form_group">
                            <input type="text" name="name" class="form_input" id="NameCar" required>
                            <label for="" class="form_label">NameCar</label>
                        </div>
                        <div class="form_group">
                            <input type="text" name="wattage" class="form_input" id="Wattage" required>
                            <label for="" class="form_label">Wattage</label>
                        </div>
                        <div class="form_group">
                            <input type="text" name="maximum_torque" class="form_input" id="Maximum torque" required>
                            <label for="" class="form_label">Maximum torque</label>
                        </div>
                        <div class="form_group">
                            <input type="text"  name="acceleration" class="form_input" id="Acceleration" required>
                            <label for="" class="form_label">Acceleration</label>
                        </div>
                        <div class="form_group">
                            <input type="text"  name="max_speed" class="form_input" id="Max speed" required>
                            <label for="" class="form_label">Max speed</label>
                        </div>
                        <div class="form_group">
                            <input type="text" name="fuel_consumption" class="form_input" id="Fuel consumption" required>
                            <label for="" class="form_label">Fuel consumption</label>
                        </div>

                        <div class="form_group">
                            <input type="text"  name="price" class="form_input" id="Standard price" required>
                            <label for="" class="form_label">Standard price</label>
                        </div>
                        <div class="form_group">
                            <input type="file" name="imageFiles" class="form_input" id="img" required>
                            <label for="" class="form_label"></label>
                        </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form_group">
                        <input type="submit" class="form_submit" name="add" value="AddProduct">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_group">
                        <button type="submit" class="form_submit" >Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </form>










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
