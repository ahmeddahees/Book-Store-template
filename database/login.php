<?php
session_start();

include("registerr.php");


if (isset($_POST['login'])) {
    $usernamee = $_POST['username1'];
    $password1 = $_POST['pass1'];

    foreach ($resultdatausername as $usernamedata) :
        if ($usernamee == $usernamedata['username'] && $password1 == $usernamedata['passwords']) {
            $_SESSION['username'] = $usernamee;
            $_SESSION['Cserials'] = $usernamedata['Cserial'];
            $_SESSION['cart'] = '<a class="a-link" href="orders.php">السلة</a>';


            header("Location: homePage.php");
            exit();
        }

    endforeach;
};