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
                            <img class="about_top" src="../img/Service.jpeg">
                            <p class="job">Service porsche</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <p class="service_text">Porsche Vietnam – One step closer to the Porsche of your dreams</p>
                        <P class="service_text_duoi">Porsche has always been the world's leading luxury, elegant and classy sports car brand. Each of the car masterpieces born is easily recognized by the distinctive Porsche imprints. It is not surprising that fans of the Porsche sports car brand are stylish, individual, always showing a style of their own and especially very meticulous. Customers knowledgeable about Porsche, from engineering to service, demand high quality and impeccable service. Most of Porsche's customers are people who enjoy life and each Porsche they have chosen exudes a unique style with its own personality. We always understand the needs with increasing personalization of customers.</p>
                        <p class="service_text_duoi1">Come to your dream Porsche at Porsche Vietnam
                        <p class="service_text_duoi">Porsche has always been the world's leading luxury, elegant and classy sports car brand. Each of the car masterpieces born is easily recognized by the distinctive Porsche imprints. It is not surprising that fans of the Porsche sports car brand are stylish, individual, always showing a style of their own and especially very meticulous. Customers knowledgeable about Porsche, from engineering to service, demand high quality and impeccable service. Most of Porsche's customers are people who enjoy life and each Porsche they have chosen exudes a unique style with its own personality. We always understand the needs with increasing personalization of customers.

                            Come to your dream Porsche at Porsche Vietnam

                            When you come to Porsche, a team of professional and friendly specialists will advise you on the range of vehicles and optional services to personalize the Porsche you desire. Our team of experts and technicians are all well-trained professionals in their profession, with a deep passion for the profession, we are sure that you will have the opportunity to be experts. Porsche's maximum support to be able to choose for themselves a Porsche to express their own personality. One of the services to achieve this goal is Porsche Exclusive – Special Equipment Kit available at the Porsche service shop. Experts with the finest craftsmanship in the automotive industry will use the finest Porsche-made equipment, parts and materials for every detail of your choice.

                            In order to satisfy the expectations of customers who already own a vehicle and want to further refine the equipment, we are pleased to present the Tequipment service package – a special Porsche Technical Equipment Kit that will satisfy this need. Tequipment is an exclusive collection distilled and designed exclusively for Porsche vehicles, developed by senior designers and engineers from Porsche AG, Germany. Tequipment offers a wide range of accessories designed to personalize your Porsche, furthermore including optional engine equipment, body options packages, sports exhaust systems, optional wheel styles and more options

                            We are pleased to share the same passion with you: Porsche sports cars. With a team of professionally trained sales staff, they are not only knowledgeable about cars but also all car accessories. We believe and are sure that with each of the most accomplished, professional members with knowledge and outstanding customer service, you will always be satisfied and choose your own Porsche style. Regularly trained, constantly improving skills and knowledge, our sales team always keep up with the latest information about Porsche models and the car market in Vietnam. They are really the leading experts to assist you in the process of owning the Porsche of your dreams.

                            We are delighted to welcome you at Porsche Vietnam. For more information, please contact our sales team:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <a class="ban111">Porsche Center Saigon</a>
                        <p class="">Address: Lot DVTM-5-6-7, Road No. N1 and Lot DVTM-4, Road No. 7, South Commercial Area, Tan Thuan Export Processing Zone, Tan Thuan Dong Ward, District 7, City. Ho Chi Minh</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a class="ban111">Porsche Center Hanoi</a>
                    <p class="">Address: 562 Nguyen Van Cu, Ward Gia Thuy, Long Bien District,
                        City. Hanoi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="giamdoc">Hotline: 0909 768 911</p>
                    <img class="img-giamdoc" src="../img/giamdoc1.jpg">
                        </div>
                        <div class="col-lg-6">
                            <p class="text-giamdoc">CEO </p>
                            <p class="text-giamdoc1">Chung Hoàng Tú</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                     <div class="row">
                        <div class="col-lg-6">
                            <p class="giamdoc">Hotline: 0909 768 911</p>
                    <img class="img-giamdoc" src="../img/giamdoc2.jpg">
                        </div>
                        <div class="col-lg-6">
                            <p class="text-giamdoc">CEO </p>
                            <p class="text-giamdoc1">Nguyễn Đức Dư Khương</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php
    require_once '../layout/footer.php';
    ?>
</body>