<?php

include './database/uploadbooks.php';
include './database/uploadfishbook.php';
include './database/orderdetail.php';
$sala = $_SESSION['cart'];
// echo $_SESSION['username'];
// echo $_SESSION['Cserials'];
$usernametop = $_SESSION['username'];
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
            <a class="a-link" href="homePage.php">
                <?php
                echo "<h2> مرحبا يا : " . $usernametop . "</h2>";

                ?>

            </a>

            <a class="a-link" href="homePage.php">الرئيسيه</a>
            <a class="a-link" href="./register.php">انشاء حساب</a>
            <a class="a-link" href="./index.php">تسجيل دخول</a>
            <a class="a-link" href="./uploadfishbooks.php">اضافة منتج قسم الأسماك</a>
            <a class="a-link" href="./upload.php">اضافة منتج قسم البحار</a>
            <?php echo $sala; ?>
        </nav>
        <div class="p-and-dark">

            <div id="mode" class="cont-div-dark">
                <div id="darkmodeleft" class="child-div-dark">
                </div>
            </div>
            <p class="pdrk">dark mode</p>
        </div>
    </header>
    <!-- end header -->
    <section class="imgfish">
        <!-- <img class="img1" src="photo/fish.jpg" alt="photo"> -->
        <div class="sec1-div1">
            <h2 class="div1-h2"> عالم البحار والمحيطات</h2>
            <p class="div1-p">متوفر لدي هذا القسم معلومات عن اعماق البحار والمحيطار وما يدور دخلهما ستكشف بنفسك معلومات
                جديده عن عظمه الخالق في هذا الصنع العظيم
                <br> يتوفر لدي المكتبه قسم خاص بالكتب
                <span class="span1"> يمكنك تحميلها pdf</span>
            </p>
        </div>
        <!-- قائمه بداخلها الاقسام -->
        <div class="secinsec">
            <select class="select">
                <option> الاقسام</option>
                <option> قسم عالم البحار</option>
                <option> قسم عالم المحيطات</option>
                <option> قسم عالم الاسماك </option>
            </select>
        </div>

        <div class="thirdinsec">
            <i class="icon-twitter2 ">

            </i>
            <i class="icon-youtube ">

            </i>
            <i class="icon-facebook ">

            </i>
        </div>
    </section>
    <!-- three -->
    <section class="section-three">
        <div>
            <h3 id="sectionThreeH3" class="section-three-h3">اهلا بك في قسم عالم البحار والمحيطات</h3>
            <p id="section-three-p" class="section-three-p">هذا القسم انشاءه بعض طلاب المعهد العالي لنظم التجارة
                الالكترونيه بسوهاج بعام 2023 يمكن للزوار الكرام تحميل الكتب المفيده لهم عن عالم البحار والمحيطات مجانا
                دون الاستراك في الموقع .</p>
        </div>
        <img class="imgBook" src="photo/book.png" alt="Book">
    </section>
    <!-- four -->
    <section id="sec" class="section-four">
        <div id="section-four-div" class="section-four-div">
            <h2 class="section-four-h2">عالم البحار</h2>
            <p class="section-four-p"> البحر يطلق على أي تجمع كبير للمياه المالحة يتصل بالمحيط أو على البحيرات المالحة
                غير المتصلة ببحار أو محيطات أخرى كبحر قزوين والبحر الميت كما يعد مصطلح البحر مسمى عاماً لكل تجمع لا بحري
                أكبر من الخور وأصغر من المحيط. كان العرب قديماً يستخدمون
                مصطلح بحر على أي تجمع للماء الكثير مالحاً كان أو عذباً ولم يستخدموا كلمة محيط .
                <br> للمزيد من المعلومات عن البحار <button id="btn" class="btn"> اضغط هنا</button>
            </p>
        </div>
        <img class="im" src="photo/ss.jpg" alt="photo2">
    </section>

    <!-- five -->
    <div class="sec5">
        <h3 class="secFive-h3">
            كتب البحار والمحيطات
        </h3>
    </div>
    <section class="photefive">
        <?php foreach ($resultdata as $seadata) : ?>

            <div class="info">
                <img class="imgphoto" src="./bookphoto/<?php echo ("$seadata[photo]") ?>" alt="" srcset="">
                <h5 class="hFive"> <?php echo ("$seadata[book]") ?> </h5>
                <p class="lg-page">وصف الكتاب : <?php echo ("$seadata[descriptionBook]") ?></p>
                <p class="lg-page">السعر : <?php echo ("$seadata[price]") ?></p>
                <div class="read-les">
                    <form method="POST">
                        <button type="submit" class="download" name="addtocart">اضف الي السله</button>
                    </form>
                </div>
            </div>

        <?php endforeach; ?>


    </section>
    <!-- six -->
    <section id="sec" class="section-six">
        <div id="section-six-div" class="section-six-div">
            <h2 class="section-six-h2">عالم الاسماك</h2>
            <p class="section-six-p"> البحر يطلق على أي تجمع كبير للمياه المالحة يتصل بالمحيط أو على البحيرات المالحة
                غير المتصلة ببحار أو محيطات أخرى كبحر قزوين والبحر الميت كما يعد مصطلح البحر مسمى عاماً لكل تجمع لا بحري
                أكبر من الخور وأصغر من المحيط. كان العرب قديماً يستخدمون
                مصطلح بحر على أي تجمع للماء الكثير مالحاً كان أو عذباً ولم يستخدموا كلمة محيط .
                <br> للمزيد من المعلومات عن البحار <button id="btn6" class="btn6"> اضغط هنا</button>
            </p>
        </div>
        <img class="photo6" src="photo/fish2.jpg" alt="photo2">
    </section>
    <!-- sevn -->
    <div class="sec5">
        <h3 class="secFive-h3">
            كتب عالم الاسماك
        </h3>
    </div>
    <section class="photefive">
        <?php foreach ($resultdatafishbooks as $fishbooks) : ?>
            <div class="info">
                <img class="imgphoto" src="./seaphoto/<?php echo ("$fishbooks[photoname]") ?>" alt="" srcset="">
                <h5 class="hFive"> <?php echo ("$fishbooks[book]") ?> </h5>
                <p class="lg-page">وصف الكتاب : <?php echo ("$fishbooks[descriptionbook]") ?></p>
                <p class="lg-page">السعر : <?php echo ("$fishbooks[price]") ?></p>
                <div class="read-les">
                    <form method="POST">
                        <button type="submit" class="download" name="addtocart">اضف الي السله</button>
                    </form>

                </div>
            </div>

        <?php endforeach; ?>
    </section>

    <!-- eight -->

    <div class="wave"> </div>
    <div class="wave2"> </div>
    <footer>

        <div class="social">
            <span class="icon-twitter2 "></span>
            <span class="icon-youtube "></span>
            <span class="icon-facebook "></span>
        </div>

        <div class="linkFoter">

            <a class="afooter" href="">About</a>
            <a class="afooter" href="">Team</a>
            <a class="afooter" href="">Contant</a>
            <a class="afooter" href="">Home</a>

        </div>
        <p class="footer-p">
            جميع الحقوق محفوظة لموقع عالم البحار والمحيطات © G5-T2 2023
        </p>

    </footer>












































    <!-- Information one-->
    <section id="information" class="information">
        <div class="hight">
            <span id="close" class="icon-cross"> </span>
            <h1 class="dark"> Dark Mode </h1>
        </div>
        <div class="condiv">
            <h1 class="DivH1">تعرف علي عالم البحار وما يدور داخله</h1>
        </div>
        <div class="seediv">
            <img class="photoSee" src="photo/four.jpg" alt="see">

        </div>
        <h3 class="writers">كتبه/ بعض طلاب المعهد العالي لنظم التجاره الالكترونيه</h3>
        <div class="one">
            <h4 class="hFour">تعريف البحر</h4>
            <p class="pWriters">كلمة البحر يمكن أن تدل إلى أنها تنتمي إلى المحيط العالمي، وقد تعني بالتحديد كتلة صغيرة
                من الماء، مثل بحر الشمال أو البحر الأحمر. لا يوجد تمييز عَملي بين البحر في هذا المعنى والمحيط، على الرغم
                من أن البحار تعتبر عموما أصغر حجما وغالبا ما تكون
                جزئية (مثل البحار الهامشية) أو كلية (مثل البحار الداخلية) والتي تحدها الأراضي. ومع ذلك، فإن بحر سرقوسة
                ليس له ساحل ويقع ضمن التيار الدائري، للدوامات شمال المحيط الأطلسي. البحار هي عموما أكبر من البحيرات
                وتحتوي على مياه مالحة وليس فيها
                مياه عذبة، ولكن بعض المناطق الجغرافية المعروفة باسم «بحار» كالمسطحات المائية الداخلية الغير المالحة: على
                سبيل المثال بحر الجليل هو بحيرة للمياه العذبة. وفي قانون البحار ينص على أن كل مَن مِن المحيط هو «بحر».
            </p>
            <h4 class="hFour"> أنواع البحار </h4>
            <p class="pWriters">
                – يتم تصنيف البحار إلى ثلاثة أنواع حسب حالتها، بحار مفتوحة وبحار شبه مفتوحة وبحار مغلقة.
                <br> - البحار المفتوحة، توجد بها فتحات واسعة متصلة بالمحيطات مثل بحر اليابان و بحر العرب.
                <br> – البحار شبه المفتوحة، تحيطها اليابسة من ثلاث جوانب وتتصل بالمحيطات عبر مضيق مثل البحر المتوسط،
                والبحر الأحمر.
                <br> – البحار المغلقة، يحيط بها اليابس من جميع الجوانب، ومنفصلة تماما عن المحيطات مثل البحر الميت وبحر
                قزوين.
            </p>
            <h4 class="hFour"> معلومات عن البحار المفتوحة</h4>
            <p class="pWriters">
                – تنقسم منطقة البحر المفتوح إلى قسمين رئيسين حسب عمق المياه.
                <br> – القسم الأول، المنطقة القريبة nearitic zone وتتصف بأنها تمتد لعمق يصل إلى 100 متر فوق الرف القاري.
                <br> – القسم الثاني، المنطقة المحيطية oceanic zone تتميز عن القسم الأول بكونها أكثر عمقا حيث يكون عمقها
                أكثر من 200 متر ويقع أسفلها مباشرة مياه متوسطة العمق.
            </p>
            <h3 class="hthree">اشهر أسماء البحار المفتوحة</h3>
            <h4 class="hFour"> بحر اليابان </h4>
            <p class="pWriters">
                – يسمى البحر الشرقي، وهو بحر حدي يقع غرب المحيط الهادي، يشبه في كثير من صفاته البحر المتوسط.
                <br> – يشبه البحر المتوسط في انعدام الأمواج المدية، نتيجة الانغلاق التام.
                <br> – يقع بحر اليابان بين جزر يابانية مثل هوكايدو، هونشو، كيوشو وجزيرة روسية هي ساخالين إلى الشرق
                بالإضافة إلى دولتي كوريا وروسيا إلى الغرب.
                <br> – يبلغ طول أعمق نقطة في بحر اليابان 3.742 متر تحت مستوى البحر.
                <br> – بينما يبلغ متوسط العمق 1752 متر، والمساحة السطحية تصل إلى 978.000 كم مربع.
            </p>
            <h4 class="hFour"> بحر العرب </h4>
            <p class="pWriters">
                – يتم اعتباره جزء من المحيط الهندي، ويقع بين سواحل شبه الجزيرة العربية وشبه القارة الهندية.
                <br> – يحد بحر العرب من جهة الشمال، دولتي إيران وباكستان، وشبه القارة الهندية من جهة الشرق.
                <br> – بينما من جهة الغرب يحده شبة الجزيرة العربية والقرن الأفريقي.
                <br> – وصل أكبر عرض لبحر العرب 2,400 كم تقريبا.
                <br> – بينما وصل أقصى عمق له إلى 4.6 كم.
                <br> يصب في بحر العرب عدد من الأنهار وهي نهر أندوس أو سندهو ونامادا بالإضافة إلى تابتي.
                <br> تطل على بحر العرب عدة سلاسل جبال وهي جبال عمان، جبال ظفار، وغات الغربية بالهند.
                <br> – يعتبر خليج عمان وخليج عدن ذراعان ممتدان لبحر العرب.
                <br> – يطل على بحر العرب عدة دول مثل المالديف، الصومال، اليمن، باكستان، عمان، الهند، إيران.

                <br> – ويطل عليه ايضا عدد من المدن والولايات، بوساسو في الصومال، المكلا في اليمن، مومباي في الهند،
                كراتشي في باكستان، ولاية صور وصلالة في عمان.
                <br> – ينتج عنه المنخفضات المدارية التي تتحول في الأغلب إلى عواصف تؤثر على الدول المطلة عليه وبالأخص
                سلطنة عمان واليمن.

            </p>
            <h4 class="hFour"> خصائص مياه البحار </h4>
            <p class="pWriters">
                – تصل سرعة الصوت في البحار والمحيطات إلى ما يقارب 1,570 م/ ثانية واحدة.
                <br> – تسبب الأملاح المذابة في المياه انخفاض درجة حرارة التجمد، بحيث تمنع الأملاح جزيئات الماء من التمكن
                من تكوين روابط.
                <br> – ارتفاع درجة الغليان بالمقارنة مع درجة غليان الماء العذب.
                <br> – ينتج عن زيادة الأملاح والمعادن المذابة في المياه زيادة الكثافة.
                <br> – الماء يعد أكثر توصيلا للتيار الكهربائي
                <br> – تحتوي مياه البحر على الكثير من العناصر مثل البوتاسيوم والكبريت والصوديوم والكالسيوم والكلوريد
                والمغنسيوم لتي تصل نسبتها بالمقياس العالمي إلى ما يقارب 37 وحدة دولية.
                <br> – تحتوي أيضا مياه البحار على الكروبون غير العضوي، النيتروجين، الفلوريد، الأكسجين، وثاني أكسيد
                الكربون.
                <br> – وجود الأملاح يعمل على زيادة خاصية انكسار الضوء وينتج عنها امتصاص الأطوال الموجية القصيرة للضوء
                ليبقى فقط الضوء الأزرق، والذي يفسر ظهور البحار باللون الأزرق.

            </p>
            <h4 class="hFour"> مياه البحر </h4>
            <p class="pWriters">
                – نسبة الماء تغطي ما يوازي ثلاثة أرباع سطح الكرة الأرضية.
                <br> – الماء أحد العناصر المهمة والتي تتصف بالغنا من حيث المواد الكيميائية والأملاح.
                <br> – نسبة الأملاح تصل إلى 2.5%، ويعتمد على مياه البحار في كثير من الدول كوسيلة أساسية للشرب على شرط
                توافر محطات لتحليت الماء رغم أنها تكلف الكثير لذلك يتم اقتصارها على دول مثل دول الخليج.
                <br> – يمكن استخراج الكثير من الأملاح والمعادن من مياه البحر المالحة مثل ملح المائدة والمغنيسيوم
                والبروم.
                <br> – البحر موطن للعديد من الكائنات الحية تصل أعدادها للملايين، حيث يعيش به حيوانات مثل سرطان وأسماك،
                بالإضافة إلى النباتات ويعتمد على أسماك البحر كمصدر للحوم.
            </p>
        </div>
    </section>
</body>

</html>