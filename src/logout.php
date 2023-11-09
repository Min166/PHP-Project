<?php
session_start();
require_once '../textcar.php';
require_once '../connection.php';
    if(isset($_SESSION['user']) && ($_SESSION['user'])){
        unset($_SESSION['user']);
        header('location:./home.php');
    }
?>
<img src="home.php"