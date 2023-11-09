<?php
session_start();
require_once '../textcar.php';
require_once '../connection.php';
$addemployee = new Car();
?>
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
        <title>profile</title>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">

        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="main"> 
            <?php
            require_once '../layout/header.php';
            ?>
        </div>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                Account settings
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                               href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="changePW.php">Change password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-info">Info</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-social-links">Social links</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-connections">Connections</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-notifications">Notifications</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="container">

                                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                            <div class="row">
                                                <div class = "col-lg-2">
                                                    <div class = "form-group qqqqqqqqqqqqqqqq" >
                                                        <label class = "form-label">Password</label>
                                                    </div>
                                                    <div class = "form-group qqqqqqqqqqqqqqqq">
                                                        <label class = "form-label">Password</label>
                                                    </div>
                                                    <div class = "form-group qqqqqqqqqqqqqqqq">
                                                        <label class = "form-label">Password</label>
                                                    </div>
                                                </div> 

                                                <div class = "col-lg-9">
                                                    <div class = "form-group">
                                                        <input type = "text" name="name" class = "form-control" value = "<?php echo $_SESSION['info'][1] ?>">
                                                    </div>
                                                    <div class = "form-group">
                                                        <input type = "text" name="phone" class = "form-control" value = "<?php echo $_SESSION['info'][3] ?>">
                                                    </div>
                                                    <div class = "form-group">
                                                        <input type = "text" name="email" class = "form-control" value = "<?php echo $_SESSION['info'][4] ?>">
                                                    </div>
                                                
                                                </div>
                                                <div class="form_group">
                                                    <input  name="add" type="submit" value="Save" class="form_submit fghj">
                                                </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
