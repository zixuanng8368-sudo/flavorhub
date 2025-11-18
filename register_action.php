<?php
    session_start();
    
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $re_password = htmlspecialchars($_POST["re_password"]);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration information</h1>
    <p><strong>Name:</strong> <?= $username ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Password:</strong> <?= $password ?></p>
    <p><strong>Re-Password:</strong> <?= $re_password ?></p>
</body>
</html>