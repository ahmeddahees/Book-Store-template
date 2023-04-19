<?php
include("./database/uploadbooks.php")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم عالم الاسماك</title>

    <!-- header -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style.min.css"> -->

    <link rel="stylesheet" href="icon/icon.css">
    <script defer src="script.js"></script>
</head>

<body id="body" dir="rtl">
    <header id="heaDer">

        <nav>

            <a class="a-link" href="homePage.php">الرئيسيه</a>
            <a class="a-link" href="./register.php">انشاء حساب</a>
            <a class="a-link" href="./index.php">تسجيل دخول</a>
            <a class="a-link" href="./uploadfishbooks.php">اضافة منتج قسم الأسماك</a>
            <a class="a-link" href="./upload.php">اضافة منتج قسم البحار</a>

        </nav>
        <div class="p-and-dark">

            <div id="mode" class="cont-div-dark">
                <div id="darkmodeleft" class="child-div-dark">
                </div>
            </div>
            <p class="pdrk">dark mode</p>
        </div>
    </header>

    <body>
        <div class="inputupload" dir="ltr">
            <div class="center">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <label for="bookname">Book name</label>
                    <div class="inputup"> <input type="text" placeholder="book name" name="bookname"> </div>
                    <label for="price">Book price</label>
                    <div class="inputup"> <input type="number" placeholder="price" name="price"> </div>
                    <label for="description">description</label>
                    <div class="inputup"> <input type="text" placeholder="description" name="description"> </div>
                    <label for="img">upload book cover</label>
                    <div class="inputup"> <input type="file" placeholder="img" name="img"> </div>
                    <label for="book">upload book here</label>
                    <div class="inputup"> <input type="file" placeholder="books" placeholder="books" name="book"> </div>

                    <button class="submit" name="submit" type="submit">upload now </button>
                </form>
            </div>
        </div>
    </body>

</html>