<!doctype html>
<html lang="en" class="no-js">


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:36:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Helenz || Login</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- all css -->
    <style>
        :root {
            --primary-color: #00234D;
            --secondary-color: #F76B6A;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #00234D;
            --btn-primary-border-color: #00234D;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #00234D;
            --btn-primary-border-hover-color: #00234D;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #00234D;
            --btn-secondary-border-hover-color: #00234D;
            --btn-secondary-font-weight: 500;

            --heading-color: #000;
            --heading-font-family: 'Poppins', sans-serif;
            --heading-font-weight: 700;

            --title-color: #000;
            --title-font-family: 'Poppins', sans-serif;
            --title-font-weight: 400;

            --body-color: #000;
            --body-background-color: #fff;
            --body-font-family: 'Poppins', sans-serif;
            --body-font-size: 14px;
            --body-font-weight: 400;

            --section-heading-color: #000;
            --section-heading-font-family: 'Poppins', sans-serif;
            --section-heading-font-size: 48px;
            --section-heading-font-weight: 600;

            --section-subheading-color: #000;
            --section-subheading-font-family: 'Poppins', sans-serif;
            --section-subheading-font-size: 16px;
            --section-subheading-font-weight: 400;
        }
    </style>

    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- include header.php -->
        <?php
        include("components/header.php");
        ?>
        <!-- include header.php end -->

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li><a href="/">Home</a></li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z" fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <main id="MainContent" class="content-for-layout">
            <div class="login-page mt-100">
                <div class="container">
                    <form method="post" class="login-form common-form mx-auto">
                        <div class="section-header mb-3">
                            <h2 class="section-heading text-center">Login</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <fieldset>
                                    <label class="label">Email address</label>
                                    <input type="email" name="email" placeholder="abc@example.com" />
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <fieldset>
                                    <label class="label">Password</label>
                                    <input type="password" name="password" placeholder="******" />
                                </fieldset>
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <a href="/forgot-password" class="text_14 d-block">Forgot your password?</a>
                                <button type="submit" name="login" class="btn-primary d-block mt-4 btn-signin">SIGN IN</button>
                                <a href="/register" class="btn btn-link mt-2 ">CREATE AN ACCOUNT</a>
                            </div>
                        </div>
                        <!-- login -->
                        <?php
                        if (isset($_POST["login"])) {
                            $email = $_POST["email"];
                            $password = $_POST["password"];

                            $loginUser = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
                            if (mysqli_num_rows($loginUser) > 0) {
                                $user = mysqli_fetch_assoc($loginUser);
                                $_SESSION["user"] = $user;
                                echo "<script>alert('Login successful ✅'); location.href='/'</script>";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </main>

        <!-- include footer -->
        <?php
        include("components/footer.php");
        ?>
        <!-- include footer end -->


        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:36:54 GMT -->

</html>