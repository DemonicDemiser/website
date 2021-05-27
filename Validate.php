<?php

    $myemail = "Editor";
    $mypass = "12345";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if ($email == $myemail and $pass == $mypass ) {

            if (isset($_POST['remember'])) {
                setcookie('email',$email,time()+3600*7);
                setcookie('pass',$pass,time()+3600*7);
            }
            session_start();
            $_SESSION['email'] = $email;
            header('Location: Welcome.php');
        }
        else{
            echo "Email or Password is Invalid.<br> Click here to <a href='Login.php'>try again</a>";
        }
    }
    else{
        header("Location : Main.php");
    }
?>