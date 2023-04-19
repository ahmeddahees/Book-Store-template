 <?php
    include "./database/orderdetail.php";

    $username = $_SESSION['username'];
    $Cserial =  $_SESSION['Cserials'];
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

         <h1 class="order-detail"></h1>

         <center class="order">Order Details</center>
         <div class="order-details" dir="ltr">
             <?php

                $usernamearray = [];
                $userdatearray = [];
                foreach ($reslutorder as $order) : ?>
                 <?php

                    if ($username == $order['Cname'] && $Cserial == $order['Cserials']) :
                        array_push($usernamearray, $order['Cname']);
                        array_push($userdatearray, $order['datee']);
                        // echo $order['Cname'];
                        // echo $order['datee'];
                    ?>

             <?php endif;
                endforeach;

                ?>

             <?php
                $i = 0;
                $u = 1;

                echo "<h1 class='usernamestyle'>user name : ";
                echo "<span style='color:#c03939;'>" . $username . "</span>";
                echo "<br>User Serial : " . "<span style='color:#c03939;'>" .  $Cserial . "</span>";
                echo "</h1>";
                echo " <div class = 'orderdate'>";

                echo " <h1>order</h1>";
                echo " <h1>order date</h1>";
                echo " </div>";

                foreach ($usernamearray as $userarray) {
                    echo "<div class='detail'>";
                    // // echo $userarray;
                    // echo "</div>";

                    echo "<h1 class='num'>" . $u . "</h1>" . "<h1 class='order-date'>";
                    echo $userdatearray[$i];
                    echo "</h1></div>";
                    $i++;
                    $u++;
                }

                ?>

         </div>


     </body>

 </html>