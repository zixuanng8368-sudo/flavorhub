<?php
session_start();
require_once 'include/connectDb.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['login'])) {

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $checkUsername = $conn->query("SELECT * FROM user WHERE username = '$username'");
        if($checkUsername->num_rows > 0) 
            {
                $user = $checkUsername->fetch_assoc();
                if(password_verify($password, $user["password"])) 
                {
                    $_SESSION["username"] = $user["username"];
                    $_SESSION["email"] = $user["email"];

                    if(isset($_POST["remember"]))
                    {
                        $token = bin2hex(random_bytes(16));
                        setcookie("remember_me", $token, time() + (30 * 24 * 60 * 60 ),"/");
                        $conn->query("UPDATE user SET token='$token' WHERE username ='$username'");
                    }
                    header("Location: index.php");
                    exit();
                }
        }
        $_SESSION["login_error"] = "Incorrect username or password";
        header("Location: login.php");
        exit();
    } 
    else if (isset($_POST['register'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $re_password = htmlspecialchars($_POST['re_password']);

        // Check if the name had been taken;
        $checkUsername = $conn->query("SELECT username FROM user WHERE username = '$username'");
        $checkEmail = $conn->query("SELECT email FROM user WHERE email = '$email'");
        if($checkUsername->num_rows > 0)
        {
            $_SESSION['register_error'] = 'The username had been taken';
        }
        // Check if email had been taken;
        else if ($checkEmail->num_rows > 0) 
        {
            $_SESSION['register_error'] = 'The email had been taken';
        }
        // Check if both password is the same
        else if($password != $re_password) 
        {
            $_SESSION['register_error'] = 'Both the password must be the same';
        }
        else
        {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $conn->query("INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')");

            header("Location: login.php");
            exit();
        }
        
        header('Location: register.php');
        exit();
    }
}
?>
