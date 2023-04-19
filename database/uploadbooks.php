<?php
include("db.php");
if (isset($_POST['submit'])) {
    $bookname = mysqli_real_escape_string($sqlDB, $_POST['bookname']);
    $price = mysqli_real_escape_string($sqlDB, $_POST['price']);
    $description = mysqli_real_escape_string($sqlDB, $_POST['description']);
    $photo = $_FILES['img'];
    $books = $_FILES['book'];
    $booksname = $books['name'];
    $tempbook = $books["tmp_name"];
    $photoname = $photo['name'];
    $tempimg = $photo["tmp_name"];

    $insertdata =  "INSERT INTO books(photo,book,bookname,price,descriptionBook) VALUES ('$photoname', '$bookname', '$booksname', '$price','$description')";
    if (!$insertdata) {
        echo "wrong in data";
    }
    mysqli_query($sqlDB, $insertdata);


    $folderbooks =  ".\books\\" . $booksname;
    move_uploaded_file($tempbook, $folderbooks);
    $folderImg = ".\bookphoto\\" . $photoname;
    move_uploaded_file($tempimg, $folderImg);
}
$comedata = "SELECT * FROM books";

$reslut = mysqli_query($sqlDB, $comedata);
$resultdata = mysqli_fetch_all($reslut, MYSQLI_ASSOC);