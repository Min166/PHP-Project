<?php
session_start();
require_once '../textcar.php';
require_once '../connection.php';
$logincar = new Car();
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
        <title></title>
    </head>
    <body>
        <div id="main"> 
            <?php
            require_once '../layout/header.php';
            ?>
        </div>
        <div>
            <div class="container-fuild">
                <div class="row" style="margin: 0; margin-left: -24px" >
                    <div class="col-lg-12" style="padding: 0">
                        <div class="asd">
                            <img class="about_top" src="../img/focus.png">
                            <p class="job">ABOUT porsche</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div>
            <div class="container">
                <div class="row aboutAS">
                    <div class="col-lg-5">
                        <img class="imgaboutas"src="../img/focus1.jpeg">
                    </div>
                    <div class="col-lg-7">
                        <p class="job1">After Sales Promotion</p>
                        <p class="text_dics">With more than 25 years of experience and constant growth, the Porsche Tequipment accessory collection is quality products, rigorously developed and tested, tailored to each Porsche. A wide range of high-quality accessories brings personalization and optimal performance to your Porsche.

Porsche Vietnam is pleased to introduce the 20% off Porsche Accessories program taking place from October 24, 2022 to the end of December 7, 2022. In addition, customers will receive a free wheel bag when purchasing any set of wheels from Porsche Tequipment.</p>
                    </div>
                </div>
            </div>
             <div class="container">
                <div class="row aboutAS">
                    <div class="col-lg-5">
                        <img class="imgaboutas" src="../img/About2.jpg">
                    </div>
                    <div class="col-lg-7">
                            <p class="job1">We set high standards. Like you.</p>
                        <p class="text_dics">You want something really special. That's why you drive a Porsche. And why you deserve an exceptional service. Sophisticated, professional and extremely powerful. Above all: dedicated to your exact requirements. That's the Porsche standard.</p>
                    </div>
                </div>
            </div>
             <div class="container">
                <div class="row aboutAS">
                    <div class="col-lg-5">
                        <img class="imgaboutas" src="../img/About3.jpg">
                    </div>
                    <div class="col-lg-7">
                           <p class="job1">All for one: your Porsche.</p>
                        <p class="text_dics">Regardless of whether it is a classic or modern car, or a GT car. We will dedicate the best service to your Porsche – for maintenance, servicing and repair. And with the Porsche Genuine Parts team, you can be assured that everything will be as perfect as the original.</p>
                    </div>
                </div>
            </div>
             <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="job1">Find out more</p>
                        <p class="job2">After Sales Promotion | Sales Service | After sales service</p>
                     
                    </div>
                </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <p class="job1">Press information</p>
                     
                    </div>
                </div>
            </div>
        </div>
         <div class="container cnposches">
            <div class="row">
                <div class="col-lg-4">
                    <p class="hanoi">Hanoi</p>
                    <div class="pp">
                        <a class="branch"href="https://porsche-vietnam.vn/wp-content/uploads/2022/03/Job-Description-Quality-Controller-PCH-ENG-1.pdf">Quality Control Specialist
                            <p>Department: After-sales</p>
                            <p>Job posting date: 24.07.2023</p></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="hanoi"> HCM</p>
                    <div class="pp">
                        <a class="branch"href="https://porsche-vietnam.vn/wp-content/uploads/2022/03/Job-Description-Quality-Controller-PCH-ENG-1.pdf">Quality Control Specialist
                            <p>Department: After-sales</p>
                            <p>Job posting date: 24.07.2023</p></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="hanoi"> CanTho</p>
                    <div class="pp">
                        <a class="branch"href="https://porsche-vietnam.vn/wp-content/uploads/2022/03/Job-Description-Quality-Controller-PCH-ENG-1.pdf">Quality Control Specialist
                            <p>Department: After-sales</p>
                            <p>Job posting date: 24.07.2023</p></a>
                    </div>
                </div>
                
            </div> 
        </div>
    </body>
    <?php
    require_once '../layout/footer.php';
    ?>
</body>