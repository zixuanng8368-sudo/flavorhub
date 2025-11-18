<?php
    session_start();
    require_once 'include/connectDb.php';

    if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
    }
    else{
        $username = 'user';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1801127a77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/index.css">
    <title>FlavorHub</title>
</head>
<body>
    <?php 
        include("include/navBar.php");
    ?>
    <section>
        <div class="welcome-message">
            <h1>Welcome, <span><?= $username ?></span></h1>
            <p>This is the index page</p>
            <div class="button-container">
                <button class="<?= isset($_SESSION['username']) ? "active" : '' ?>"onclick="window.location.href='logout.php'">Logout</button>
            </div>
        </div>
    </section>
    
</body>
</html>