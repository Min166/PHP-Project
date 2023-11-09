<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$addemployee = new Car();
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
                    <P class="nameproduct">Information</P>
                </div>
            </div> 
            <div class="row">
                <?php
                if (isset($_POST['add']) && ($_POST['add'])) {
                    $username = $_POST['username'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pw = $_POST['pw'];
                    $cpw = $_POST['cpw'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];

                    if ($pw == $cpw) {
                        $result = $addemployee->addemployee($conn, $username, $name, $pw, $email, $address, $phone);
                        unset($_SESSION['user']);
                        echo '<script>alert("Update Information Succesfully!");</script>';
                        echo '<script>window.location = "../src/login.php"</script>';
                    }
                }
                ?>
                <div class="container">
                    <?php
                    if (isset($_SESSION['admin']) && ($_SESSION['admin'])) {
                        ?>
                        <form class="signup_form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="form_group">
                                <input type="text" name="username" class="form_input" id="user" value="<?php echo $_SESSION['inforadmin'][0] ?>" required>
                                <label for="" class="form_label">UserName</label>
                            </div>
                            <div class="form_group">
                                <input type="text" name="name" class="form_input" id="name" value="<?php echo $_SESSION['inforadmin'][1] ?> " required>
                                <label for="" class="form_label">Name</label>
                            </div>
                            <div class="form_group">
                                <input type="email" name="email" class="form_input" id="email" value="<?php echo $_SESSION['inforadmin'][4] ?> " required>
                                <label for="" class="form_label">Email</label>
                            </div>
                            <div class="form_group">
                                <input type="password" name="pw" class="form_input" id="pass" value="<?php echo $_SESSION['inforadmin'][2] ?> " required>
                                <label for="" class="form_label">Password</label>
                            </div>
                            <div class="form_group">
                                <input type="password" name="cpw" class="form_input" id="cpass" value="<?php echo $_SESSION['inforadmin'][2] ?> " required>
                                <label for="" class="form_label">Confirm Password</label>
                            </div> 
                            <div class="form_group">
                                <input type="text" name="phone" class="form_input" id="phone" value="<?php echo $_SESSION['inforadmin'][3] ?> " required>
                                <label for="" class="form_label">Phone</label>
                            </div> 
                            <div class="form_group">
                                <input type="text" name="address" class="form_input" id="address" value="<?php echo $_SESSION['inforadmin'][5] ?> " required>
                                <label for="" class="form_label">Address</label>
                            </div>
                            <div class="form_group">
                                <input  name="add" type="submit" value="Save" class="form_submit fghj">
                            </div>
                            <div class="form_group">
                                <input type="checkbox" id="ckcheck">
                                <label for="ckcheck">I have read and agree to the <a href="#!service" class="signup_link signup_link-under">Term of Service</a></label>
                            </div>
                        </form>
                    <?php } ?></div>
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
