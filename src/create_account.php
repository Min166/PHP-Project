<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$addcustomer = new Car();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style_createCus.css">

        <title>Create Customer</title>
    </head>
    <body>
        <?php
        require_once '../layout/header.php';
        ?>
        <div class="signup container-fluid">

            <?php
            if (isset($_POST['add']) && ($_POST['add'])) {
                $username = $_POST['username'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pw = $_POST['pw'];
                $cpw = $_POST['cpw'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $result = $addcustomer->addcustomer($conn, $username, $name, $pw, $email, $address,$phone);
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

    </body>
    <script>
        function checkAccount() {
        var user = document.getElementById('user').value;
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var cpass = document.getElementById('cpass').value;
        var address = document.getElementById('address').value;
        var filter = /^[a-zA-Z0-9_\.\-]+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (user === '' || user === null) {
                alert('Please Enter Full user!');
                document.getElementById('user').focus();
                return false;
            } else {
                if (user.length <= 1) {
                alert('Please Enter Full Name!');
                document.getElementById('user').focus();
                return false;
                }
            }
            if (name === '' || name === null) {
                alert('Please Enter Full user!');
                document.getElementById('user').focus();
                return false;
            } else {
                if (name.length <= 1) {
                alert('Please Enter Full Name!');
                document.getElementById('name').focus();
                return false;
                }
            }
            if (email === '' || email === null) {
                alert('Please Enter Email!');
                document.getElementById('email').focus();
                return false;
            } else {
                if (!filter.test(email)) {
                alert('Invalid email. Please re-enter!');
                document.getElementById('email').focus();
                return false;
                }
            }
            if (pass === '' || pass === null) {
                alert('Please Enter Number pass!');
                document.getElementById('pass').focus();
                return false;
            } else {
                if (pass.length < 8) {
                alert('Phone number must not be less than 5 digits!');
                document.getElementById('pass').focus();
                return false;
                }
            }
            if (cpass === '' || cpass === null) {
                alert('Please Enter Odl Password!');
                document.getElementById('cpass').focus();
                return false;
            } else {
                if (cpass.length < 8) {
                    alert('Old Password must not be less than 8 characters!');
                    document.getElementById('cpass').focus();
                    return false;
                }
            }
            if (address === '' || address === null) {
                alert('Please Enter Odl address!');
                document.getElementById('address').focus();
                return false;
            }
        }
    </script>
</html>
