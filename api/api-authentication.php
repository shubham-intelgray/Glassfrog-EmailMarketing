<?php

    require_once('./../config.php');
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
            echo json_encode(array(
                'status' => '401',
                'message' => 'unauthorized',
                'data' => array(
                    'error' => 'Unauthorized User Access'
                )
            ));
            die();
        }
        
    }else{
        echo json_encode(array(
            'status' => '401',
            'message' => 'unauthorized',
            'data' => array(
                'error' => 'Unauthorized User Access'
            )
        ));
        die();

    }
?>