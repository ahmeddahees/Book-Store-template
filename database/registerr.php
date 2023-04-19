<?php
include("db.php");
if (isset($_POST['register'])) {

    $username = mysqli_escape_string($sqlDB, $_POST['username']);
    $password = mysqli_escape_string($sqlDB, $_POST['pass']);
    $phone = mysqli_escape_string($sqlDB, $_POST['phone']);
    $email = mysqli_escape_string($sqlDB, $_POST['email']);
    $address = mysqli_escape_string($sqlDB, $_POST['address']);
    $registerdata = "INSERT INTO reigster(username,phone,email,Caddress,passwords) VALUES ('$username','$phone','$email','$address','$password')";
    if (!$registerdata) {
        echo "wrong data";
    }
    mysqli_query($sqlDB, $registerdata);
    header("Location: ../index.php");
    exit();
}
$nameandserial = "SELECT username,Cserial,passwords,Caddress,email,phone FROM reigster";

$reslutusername = mysqli_query($sqlDB, $nameandserial);
$resultdatausername = mysqli_fetch_all($reslutusername, MYSQLI_ASSOC);

$_SESSION['userNameData'] = $resultdatausername;
