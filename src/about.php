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
                            <img class="about_top" src="../img/About.jpg">
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
                        <img class="imgaboutas"src="../img/About1.jpg">
                    </div>
                    <div class="col-lg-7">
                        <p class="job1">Job opportunity</p>
                        <p class="text_dics">We are looking for talented people who appreciate a professional working environment and top opportunities for personal growth. If you believe you fit the job requirements from Porsche and are passionate about sports cars. Be part of a Porsche legend.

Many opportunities are available to you when you come to Porsche – whether as a student, bachelor or experienced professional. We offer many exciting career development opportunities for those associated with Porsche.</p>
                    </div>
                </div>
            </div>
             <div class="container">
                <div class="row aboutAS">
                    <div class="col-lg-5">
                        <img class="imgaboutas" src="../img/About2.jpg">
                    </div>
                    <div class="col-lg-7">
                            <p class="job1">Porsche AG</p>
                        <p class="text_dics">Dr. Ing. H. c. F. Porsche AG was founded on April 25, 1931 by Mr. Ferdinand Porsche and is headquartered in Stuttgart, Germany. After 87 years of being consistent with the brand's business philosophy, Porsche AG is now one of the world's leading sports car manufacturers with iconic and compelling models such as the legendary 911, 718 Boxster, 718 Cayman, Gran Turismo Panamera, Cayenne SUV, Macan mid-size SUV.

With the strong growth in operating results, Porsche's distribution system is increasingly expanding to include 8 key markets: Europe, Germany, America, America, Asia Pacific[…]
</p>
                    </div>
                </div>
            </div>
             <div class="container">
                <div class="row aboutAS">
                    <div class="col-lg-5">
                        <img class="imgaboutas" src="../img/About3.jpg">
                    </div>
                    <div class="col-lg-7">
                           <p class="job1">Porsche VN</p>
                        <p class="text_dics">Founded in 2007, Porsche has marked more than a decade in the Vietnamese market and is growing strongly, establishing a leading position in the luxury sports car segment. Porsche in Vietnam is currently developing strongly with Porsche Saigon Center, […]</p>
                    </div>
                </div>
            </div>
             <div class="container">
                <div class="row aboutAS">
                    <div class="col-lg-5">
                        <img class="imgaboutas" src="../img/About4.jpg">
                    </div>
                    <div class="col-lg-7">
                        <p class="job1">Press information</p>
                        <p class="text_dics">Stuttgart. Porsche successfully ended the first 6 months of 2023 with a 15% increase in sales. The sports car maker has delivered 167,354 vehicles to customers globally. “After the first 6 months of the year, we are satisfied with the business results so far,” shared Mr. Detlev von Platen, Member of the Board of Directors, in charge of Sales and Marketing at Porsche AG. “We recorded growth in all Porsche markets.”</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="container cnposches">
             <div class="row">
                 <div class="col-lg-12 center">Porsche Center</div>
             </div>
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