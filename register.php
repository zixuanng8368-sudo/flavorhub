<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/register-login.css">
    <script src="https://kit.fontawesome.com/1801127a77.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>

        <div class="wrapper">
            <form action="#" method="post" name="registration-form">

            <h1>Register</h1>

            <div class="input-container">
                <input type="text" placeholder="Username" required autocomplete="name">
                <i class="fa-solid fa-user"></i>
            </div>
            
            <div class="input-container">
                <input type="email" placeholder="E-mail" required autocomplete="email">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-container">
                <input type="password" placeholder="Password" required autocomplete="new-password">
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="input-container">
                <input type="password" placeholder="Re-enter your password" required autocomplete="new-password">
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="button-container">
                <input type="submit" class="submit-btn" value="Create Account">
            </div>

            <div class="login-container">
                <p>Already had an account? <a href="login.php">Login</a></p>
            </div>

            </form>
        </div>
    
</body>
</html>