<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    require_once 'include/connectDb.php';

    if(isset($_COOKIE["remember_me"]))
    {
        $token = $_COOKIE["remember_me"];
        $result = $conn->query("SELECT * FROM user WHERE token='$token'");
        if($result->num_rows > 0)
        {
            $user = $result->fetch_assoc();
            $_SESSION["username"] = $user["username"];
        }
        header("Location: index.php");
        exit();
    }

    $errors = [
        'register' => $_SESSION['register_error'] ?? ''
    ];

    unset($_SESSION['register_error']);

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
    <title>Register</title>
</head>

<body>

    <?php
    include("include/navBar.php");
    ?>

    <section class="register-login">
        <div class="wrapper">
            <form action="register_login.php" method="post" name="registration-form">

                <h1>Register</h1>

                <?= showError($errors['register']); ?>

                <div class="input-container">
                    <input type="text" placeholder="Username" name="username" required autocomplete="name" autofocus> 
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="email" placeholder="E-mail" name="email" required autocomplete="email">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="password" placeholder="Password" name="password" required autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                </div>

                <div class="input-container">
                    <input type="password" placeholder="Re-enter your password" name="re_password" required autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                </div>

                <div class="button-container">
                    <button type="submit" class="submit-btn" name="register">Create Account</button>   
                </div>

                <div class="login-container">
                    <p>Already had an account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </section>


</body>

</html>