<?php
session_start();
require_once '../connection.php';
require_once '../textcar.php';
$jia = new Car();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <title></title>

    </head>
    <body>    

        <?php
        require_once '../layout/header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 nitro" >Discover</div>
            </div>
        </div>
        <?php
        $id = $_GET['id'];
        $result = $jia->showDiscover($conn, $id);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?> 
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="img-cou" src="<?php echo $row['img']?>" alt="Los Angeles" >
                                    </div>
                                    <div class="col-lg-6 text_dics">
                                        <p><?php echo $row['Describe']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="img-cou" src="<?php echo $row['img2']?>" alt="Los Angeles" >
                                    </div>
                                    <div class="col-lg-6 text_dics">
                                        <p><?php echo $row['Describe2']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="img-cou" src="<?php echo $row['img3']?>" alt="Los Angeles" >
                                    </div>
                                    <div class="col-lg-6 text_dics">
                                        <p><?php echo $row['Describe3']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev icon-dis" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon icon-dis"></span>
                    </a>
                    <a class="carousel-control-next icon-dis" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon icon-dis"></span>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>       


    <?php
    require_once '../layout/footer.php';
    ?>
</body>
</html>