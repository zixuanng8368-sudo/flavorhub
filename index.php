<?php
    session_start();
    require_once 'include/connectDb.php';

    if(!isset($_SESSION['username']))
    {
        if(isset($_COOKIE['remember_me']))
        {
            $token = $_COOKIE['remember_me'];
            $result = $conn->query("SELECT * FROM user where token='$token'");
            
            if($result->num_rows > 0)
            {
                $user = $result->fetch_assoc();
                $_SESSION["username"] = $user["username"];
                $username = $user["username"];
            }
        }
        else
        {
            $username = 'user';
        }
    }
    else{
        $username = $_SESSION['username'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1801127a77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/navBar.css">
    <title>FlavorHub</title>
</head>
<body>
    <?php 
        include("include/navBar.php");
    ?>
    <section class="hero-section">
        <div class="welcome-message">
            <h1>Welcome, <span><?= strtoupper($username) ?></span></h1>
            <h2>“Discover, Share, and Enjoy Delicious Recipes”</h2>
            <h2>“Explore thousands of recipes from home cooks worldwide.”</h2>
            <p>Free to use, Easy recipe uploads, Save recipe to your profile</p>
        </div>

    </section>

    
</body>
</html>