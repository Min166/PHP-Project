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
<!--        <link rel="stylesheet" href="../css/style_createCus.css">-->
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <title>Login</title>
    </head>
    <body>
         <?php
        require_once '../layout/header.php';
        ?>
          <?php
            if (isset($_POST['namelogin']) && ($_POST['namelogin'])) {
                $login = $_POST['dn'];
                $mk = $_POST['mk'];
                $result = $logincar->login($conn, $login, $mk);
              
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row['role'] == 1) {
                            $_SESSION['admin'] = $row['username'];
                            $inf = array($row['username'],$row['name'],$row['pw'],$row['phone'],$row['email'],$row['address'],$row['id']);
                            $_SESSION['inforadmin']=$inf;
                            header('location:../admin/admin.php');
                        }if ($row['role'] == 2) {
                            $_SESSION['user'] = $row['username'];
                            $inf = array($row['username'],$row['name'],$row['pw'],$row['phone'],$row['email'],$row['address'],$row['id']);
                            $_SESSION['infor']=$inf;
                            header('location:./home.php');
                        }else if($row['role'] == 0){
                            header('location:login.php');
                        }
                    }
                }
            }else{
                
            }
            ?>
        <div class="signup container-fluid">
        <h2 class="signup_heading">Log In</h2>
        <p class="signup_already">Forget Password ? <a href="forgotpassword.php" class="signup_link signup_link-under">Forget Password</a></p>
        <form class="signup_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return checkLogin()">
            <div class="form_group--2 local_btn-log">
                <button class="btn btn-success btn-gg"><i class="fa-brands fa-google"></i>&nbsp;Sign In with Google</button>
                <button class="btn btn-primary btn-gg"><i class="fa-brands fa-twitter"></i>&nbsp;Sign In with Twitter</button>
            </div>
            <div class="form_group">
                <input type="text" name='dn' class="form_input" id="txtemail" required>
                <label for="" class="form_label">UserName</label>
            </div>
            <div class="form_group">
                <input type="password" name='mk' class="form_input" id="txtpass" required>
                <label for="" class="form_label">Password</label>
            </div>
            <div class="form_group">
                <input type="submit" name="namelogin" value="Login" class="form_submit" onclick="checkLogin()">
            </div>
        </form>
    </div>
    </body>
    

</html>
