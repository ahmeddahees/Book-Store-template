<?php
include("db.php");
if (isset($_POST['submit'])) {
    $bookname = mysqli_real_escape_string($sqlDB, $_POST['fishbookname']);
    $price = mysqli_real_escape_string($sqlDB, $_POST['fishprice']);
    $description = mysqli_real_escape_string($sqlDB, $_POST['fishdescription']);
    $photo = $_FILES['fishimg'];
    $books = $_FILES['fishbook'];
    $booksname = $books['name'];
    $tempbook = $books["tmp_name"];
    $photoname = $photo['name'];
    $tempimg = $photo["tmp_name"];

    $insertfishdata =  "INSERT INTO fishbooks(photoname,book,bookname,price,descriptionBook) VALUES ('$photoname', '$bookname', '$booksname', '$price','$description')";
    if (!$insertfishdata) {
        echo "wrong in data";
    }
    mysqli_query($sqlDB, $insertfishdata);


    $folderbooks =  ".\seaBooks\\" . $booksname;
    move_uploaded_file($tempbook, $folderbooks);
    $folderImg = ".\seaphoto\\" . $photoname;
    move_uploaded_file($tempimg, $folderImg);
}
$comefishbook = "SELECT * FROM fishbooks";

$reslutfishbooks = mysqli_query($sqlDB, $comefishbook);
$resultdatafishbooks = mysqli_fetch_all($reslutfishbooks, MYSQLI_ASSOC);