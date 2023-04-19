<?php
session_start();
include "db.php";
$username = $_SESSION['username'];
$Cserial =  $_SESSION['Cserials'];

if (isset($_POST['addtocart'])) {
    $userserial = $_SESSION['Cserials'];
    $username = $_SESSION['username'];
    $timenow = date('d-m-Y');
    $datee = mysqli_escape_string($sqlDB, $timenow);

    $order = "INSERT INTO orderdetail(Cserials, Cname,datee) VALUES ('$userserial','$username','$datee')";
    if (!$order) {
    }
    mysqli_query($sqlDB, $order);
};
$oderdetails = "SELECT * FROM orderdetail ";

$orderresult = mysqli_query($sqlDB, $oderdetails);
$reslutorder = mysqli_fetch_all($orderresult, MYSQLI_ASSOC);
