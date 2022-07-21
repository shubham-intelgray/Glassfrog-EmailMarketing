<?php

    require_once('./config.php');
    if(isset($_POST) && isset($_POST['authentication'])) {
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $query = "SELECT * FROM `users` WHERE `user_email`='$email' AND `user_password`='$password'";
        $query_exec = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($query_exec);
        if($row) {
            $cookie_name = "user";
            $cookie_value = json_encode($row);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            return header('Location: index.php');

        }else{
            header('Location: login.php?error=401');
        }
    }
    // if cookie is already available
    if(isset($_COOKIE['user'])) {
        $cookie = json_decode($_COOKIE['user'], true);
        $email = $cookie['user_email'];
        $password = $cookie['user_password'];

        $query = "SELECT * FROM `users` WHERE `user_email`='$email' AND `user_password`='$password'";
        $query_exec = mysqli_query($conn, $query);
        $user = mysqli_fetch_array($query_exec);

        if(!$user) {
            $cookie_name = "user";
            $cookie_value = json_encode($user);
            setcookie($cookie_name, $cookie_value, time() + (0), "/"); // 86400 = 1 day
            header('Location: login.php?error=401');

        }
        
    }else{
        if($_SERVER['REQUEST_URI'] != "/login.php") {
            header('Location: login.php');
        }
    }

    //if logout occurs
    if(isset($_GET['logout'])) {
        $cookie_name = "user";
        $cookie_value = json_encode($user);
        setcookie($cookie_name, $cookie_value, time() + (0), "/"); // 86400 = 1 day
        header('Location: login.php');
    }
?>