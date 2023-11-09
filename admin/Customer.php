<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$customer = new Car();
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
        <title>Customer Admin</title>
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
                            <p class="text_revenue"><i class="fa-solid fa-user-check"></i> System</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">165 User</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-user-tie"></i> Manager</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell">3 User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="revenue">
                            <p class="text_revenue"><i class="fa-solid fa-earth-americas"></i> Customer</p>
                            <div class="middle">
                                <div class="left">
                                    <p class="sell"> 162 User</p>
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
                    <P class="nameproduct">Customer</P>
                </div>
                <div class="col-lg-6">
                    <div class="btnaddNew">
                         <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <input name="poro" class="tsst"placeholder="Customer">
                        <input name="search" type="submit" class="btn-primary nut" value="Search">
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                if(isset($_GET['action']) && ($_GET['action'] == 'delete')){
                    $id = $_GET['id'];
                }else{
                    $id = 0;     
                }
                $query = $customer->deletecustomerAdmin($conn, $id);
                ?>
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <tr>
                            <th class="ghsda">ID </th>
                            <th class="ghsda">UserName</th>
                            <th class="ghsda">Name</th>
                            <th class="ghsda">Password</th>
                            <th class="ghsda">Phone</th>
                            <th class="ghsda">Email</th>
                            <th class="ghsda">Address</th>
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
                            $result = $customer->showcustomerAdmin($conn,$key);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <td class="ghsda"><?php echo $row['id'] ?></td>
                                        <td class="ghsda"><?php echo $row['username'] ?></td>
                                        <td class="ghsda"><?php echo $row['name'] ?></td>
                                        <td class="ghsda"><?php echo $row['pw'] ?></td>
                                        <td class="ghsda"><?php echo $row['phone'] ?></td>
                                        <td class="ghsda"><?php echo $row['email'] ?></td>
                                        <td class="ghsda"><?php echo $row['address'] ?></td>
                                        <td class="tyui"><a href="Customer.php?action?product&id=<?php echo $row['id'] ?>"><i class="fas fa-pen"></i></a></td>
                                        <td class="tyui"><a href="Customer.php?action=delete&id=<?php echo $row['id'] ?>"><i class="far fa-trash-alt"></i></a></td>
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
