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
                        <form>
                            <input type="text" placeholder="Search here">
                            <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        </form>
                    </label>
                </div>
            </div>
            <div class="row">

                <div class="signup container">

                    <?php
                    if (isset($_POST['add']) && ($_POST['add'])) {
                        $username = $_POST['username'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pw = $_POST['pw'];
                        $cpw = $_POST['cpw'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $result = $addemployee->addemp($conn, $username, $name, $pw, $email, $address, $phone);
                        echo '<script>alert("Create Employee Successfully"); window.location = "Customer.php";</script>';
                    }
                    ?>
                    <h2 class="signup_heading">Create Account</h2>
                    <p class="signup_already">Already have an account ? <a href="login.php" class="signup_link signup_link-under">Log In</a></p>
                    <form class="signup_form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return checkInfor()">
                        <div class="form_group">
                            <input type="text" name="username" class="form_input" id="user" required>
                            <label for="" class="form_label">UserName</label>
                        </div>
                        <div class="form_group">
                            <input type="text" name="name" class="form_input" id="name" required>
                            <label for="" class="form_label">Name</label>
                        </div>
                        <div class="form_group">
                            <input type="email" name="email" class="form_input" id="email" required>
                            <label for="" class="form_label">Email</label>
                        </div>
                        <div class="form_group">
                            <input type="password" name="pw" class="form_input" id="pass" required>
                            <label for="" class="form_label">Password</label>
                        </div>
                        <div class="form_group">
                            <input type="password" name="cpw" class="form_input" id="cpass" required>
                            <label for="" class="form_label">Confirm Password</label>
                        </div> 
                        <div class="form_group">
                            <input type="text" name="phone" class="form_input" id="phone" required>
                            <label for="" class="form_label">Phone</label>
                        </div> 
                        <div class="form_group">
                            <input type="text" name="address" class="form_input" id="address" required>
                            <label for="" class="form_label">Address</label>
                        </div>
                        <div class="form_group">
                            <input name="add" type="submit" value="Sign Up" class="form_submit" onclick="checkAccount()">
                        </div>
                        <div class="form_group">
                            <input type="checkbox" id="ckcheck">
                            <label for="ckcheck">I have read and agree to the <a href="#!service" class="signup_link signup_link-under">Term of Service</a></label>
                        </div>
                    </form>
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
