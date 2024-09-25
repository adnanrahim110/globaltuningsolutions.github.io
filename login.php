<?php
session_start();

if (isset($_SESSION['auth'])) {
    if ($_SESSION['role_as'] == 0) {
        $_SESSION['message'] = "You are already logged In";
        $_SESSION['message_type'] = 'warning';
        header('location: user/dashboard.php');
        exit(0);
    } elseif ($_SESSION['role_as'] == 1) {
        $_SESSION['message'] = "You are already logged In";
        header('location: admin/dashboard.php');
        exit(0);
    }
}

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - GLOBAL TUNING SOLUTIONS</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="user/resources/vendor/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">

    <link rel="stylesheet" href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">

    <link rel="stylesheet" href="user/resources/css/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.svg">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <!-- Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        // Render localStorage JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
        if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
        if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>
</head>

<body class="geex-dashboard authentication-page">
    <main class="geex-content">
        <div class="geex-content__authentication">
            <div class="geex-content__authentication__content">
                <div class="geex-content__authentication__content__wrapper">
                    <!-- <div class="geex-content__authentication__content__logo">
                        <a href="index.php">
                            <img class="logo-lite" src="user/resources/img/logo-dark.svg" alt="logo">
                            <img class="logo-dark" src="user/resources/img/logo-lite.svg" alt="logo">
                        </a>
                    </div> -->
                    <?php
                    if (isset($_SESSION['message'])) {
                        // Get message and message type
                        $message = $_SESSION['message'];
                        $messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning'; // Default to 'warning'

                    ?>
                        <center>
                            <div style="max-width: 400px;"
                                class="text-center alert alert-<?= $messageType; ?> alert-dismissable fade show" role="alert">
                                <strong>Hey!</strong> <?= $message; ?>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </center>
                    <?php
                        // Unset the session variables to avoid displaying the message again
                        unset($_SESSION['message']);
                        unset($_SESSION['message_type']);
                    }
                    ?>
                    <form id="signInForm" class="geex-content__authentication__form" action="config/auth.php" method="post">
                        <h2 class="geex-content__authentication__title">Sing In to Your Account 👋</h2>
                        <div class="geex-content__authentication__form-group">
                            <label for="emailSignIn">Your Email</label>
                            <input type="email" id="emailSignIn" name="email" placeholder="Enter Your Email" required>
                            <i class="uil-envelope"></i>
                        </div>
                        <div class="geex-content__authentication__form-group">
                            <div class="geex-content__authentication__label-wrapper">
                                <label for="loginPassword">Your Password</label>
                                <a href="forgot-password">Forgot Password?</a>
                            </div>
                            <input type="password" id="loginPassword" name="password" placeholder="Password" required>
                            <i class="uil-eye toggle-password-type"></i>
                        </div>
                        <div class="geex-content__authentication__form-group custom-checkbox">
                            <input type="checkbox" class="geex-content__authentication__checkbox-input" id="rememberMe">
                            <label class="geex-content__authentication__checkbox-label" for="rememberMe">Remember
                                Me</label>
                        </div>
                        <button type="submit" class="geex-content__authentication__form-submit" name="login_btn">Sign
                            In</button>
                        <div class="geex-content__authentication__form-footer">
                            Doesn't have any account? <a href="register">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="geex-content__authentication__img">
                <img src="user/resources/img/authentication.svg" alt="">
            </div>
        </div>
    </main>

    <script src="user/resources/vendor/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="user/resources/vendor/js/jquery/jquery-ui.js"></script>
    <script src="user/resources/vendor/js/bootstrap/bootstrap.min.js"></script>
    <script src="user/resources/js/main.js"></script>
</body>

</html>
