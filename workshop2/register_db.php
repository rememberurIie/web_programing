<?php
    session_start();
    include('conn_db.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])){
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        if(empty($first_name)){
            array_push($errors,"Firstname Requried");
            $_SESSION['error'] = "Firstname Requried";
            header('location: register.php');
        }
        if(empty($last_name)){
            array_push($errors,"Lastname Requried");
            $_SESSION['error'] = "Lastname Requried";
            header('location: register.php');
        }
        if(empty($email)){
            array_push($errors,"Email Requried");
            $_SESSION['error'] = "Email Requried";
            header('location: register.php');
        }
        if(empty($phone)){
            array_push($errors,"Phonenumber Requried");
            $_SESSION['error'] = "Phonenumber Requried";
            header('location: register.php');
        }
        if(empty($username)){
            array_push($errors,"Username Requried");
            $_SESSION['error'] = "Username Requried";
            header('location: register.php');
        }
        if(empty($password1)){
            array_push($errors,"Password Requried");
            $_SESSION['error'] = "Password Requried";
            header('location: register.php');
        }
        if(empty($password2)){
            array_push($errors,"Re-Password Requried");
            $_SESSION['error'] = "Re-Password Requried";
            header('location: register.php');
        }
        if($password1 != $password2){  
            array_push($errors,"Password not match!");
            $_SESSION['error'] = "Password not match!";
            header('location: register.php');
        }

        //query db
        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        //check data exist
        if ($result){
            if ($result['username'] === $username){
                array_push($errors,"Username already exists");
                $_SESSION['error'] = "Username already exists";
                header('location: register.php');
            }
            if ($result['email'] === $email){
                array_push($errors,"Email already exists");
                $_SESSION['error'] = "Email already exists";
                header('location: register.php');
            }
        }

        if(count($errors) == 0){
            $password = md5($password1);

            $sql = "INSERT INTO user (username, password, email, phone, first_name, last_name) VALUES ('$username', '$password', '$email', '$phone', '$first_name', '$last_name')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }
?>