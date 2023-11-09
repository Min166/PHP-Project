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
               
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
                $result = $addcustomer->addcontact($conn, $name, $phone, $message);
            }
            ?>
            <h2 class="signup_heading">Contact</h2>
           <form class="signup_form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return checkInfor()">
               
                <div class="form_group">
                    <input type="text" name="name" class="form_input" id="name" required>
                    <label for="" class="form_label">Name</label>
                </div>
                  <div class="form_group">
                    <input type="text" name="phone" class="form_input" id="phone" required>
                    <label for="" class="form_label">Phone</label>
                </div> 
                <div class="form_group">
                    <input type="text" name="message" class="form_input" id="message" required>
                    <label for="" class="form_label">Message</label>
                </div>
                <div class="form_group">
                    <input name="add" type="submit" value="Sign Up" class="form_submit" onclick="checkAccount()">
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
