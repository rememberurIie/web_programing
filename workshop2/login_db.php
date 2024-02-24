<?php
    session_start();
    include('conn_db.php');
    
    $errors = array();

    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $password_md = md5($password);
        
        if (empty($username)){
            array_push($errors,"Username Required");
            $_SESSION['error'] = "Username Required";
            header('location: login.php');
        }
        if (empty($password)){
            array_push($errors,"Password Required");
            $_SESSION['error'] = "Password Required";
            header('location: login.php');
        } 
        if (empty($password_md & $username)) {
            array_push($errors,"Username & Password Required");
            $_SESSION['error'] = "Username & Password Required";
            header('location: login.php');
        }
        
        if (count($errors) == 0){
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password_md' ";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else{
                array_push($errors, "Username and Password not match");
                $_SESSION['error'] = "Username and Password not match";
                header('location: login.php');
            }
        }
    }
?>