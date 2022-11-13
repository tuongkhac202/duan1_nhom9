<?php
session_start();
include 'dao/pdo.php';
include 'view/header.php';


// code dưới này
if(isset($_GET['act']) && $_GET['act'] !=""){
    $act = $_GET['act'];
    switch ($act) {
        case '':
            include '';
            break;
        
        default:
        include 'view/home.php';
            break;
    }
}else{
    include 'view/home.php';
}











include 'view/footer.php';
?>