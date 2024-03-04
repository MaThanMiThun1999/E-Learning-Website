<?php

include("../db/config.php");
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if(empty ($username)){
        header("Location:../Login_Failed/login_failed_unvalid_username.php?error = Please Enter Required Username");
        exit();
    } else if (empty ($password)){
        header("Location:../Login_Failed/login_failed_unvalid_password.php?error = Please Enter Required Password");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password' ";
        $result = mysqli_query($mysqli,$sql);

        if (mysqli_num_rows($result)){
            $rows = mysqli_fetch_assoc($result);

            if ($rows['username'] === $username && $rows ['password'] === $password) {
                $_SESSION['username'] = $rows ['username'];
                $_SESSION['name'] = $rows ['name'];
                $_SESSION['password'] = $rows ['password'];
                $_SESSION['id'] = $rows ['id'];

                header("Location:../Homepage/TamilCodeLab.php");
                exit();
            }
        }
        else{
            header("Location:../Login_Failed/login_failed.php?error= please fill both");
            exit();
        }
    }
}