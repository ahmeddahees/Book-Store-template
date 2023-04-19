<!doctype html>
<html lang="en">

<head>
    <title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/stylelogin.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Page</h2>
                </div> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>






                        <h3 class="text-center mb-4">مرحبا بك في موقع أعماق البحار لتحميل الكتب</h3>
                        <form action="./database/registerr.php" method="POST" class="login-form">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Username" name="username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="phone" name="phone" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Password" name="pass" required>
                            </div>
                            <div class="form-group d-md-flex">

                                <div style="position: absolute;right:0;" class="w-50 text-md-right">
                                    <a href="index.php">Login Now</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>