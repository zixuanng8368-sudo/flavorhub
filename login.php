<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    $errors = [
        'login' => $_SESSION['login_error'] ?? ''
    ];

    unset($_SESSION['login_error']);

    function showError($error) {
        return !empty($error) ? "<p class='error-message'>$error</p>" : '';
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/register-login.css">
    <link rel="stylesheet" href="style/navBar.css">
    <script src="https://kit.fontawesome.com/1801127a77.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>

    <?php
    include("include/navBar.php");
    ?>

    <section class="register-login">
        <div class="wrapper">
            <form action="register_login.php" method="post" class="login-form">

                <h1>Login</h1>
                <?= showError($errors['login']); ?>
                <div class="input-container">
                    <input type="text" placeholder="Username" name="username" autocomplete="name" required autofocus>
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="password" placeholder="Password" name="password" autocomplete="current-password"
                        required>
                    <i class="fa-solid fa-lock"></i>
                </div>

                <div class="remember-forget-container">
                    <label><input type="checkbox" name="remember">Remember Me?</label>
                    <a href="#">Forget Password</a>
                </div>

                <div class="button-container">
                    <button type="submit" name="login" class="submit-btn">Login</button>
                </div>

                <div class="no-account-container">
                    <p>Does not have an account? <a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
    </section>


</body>

</html>