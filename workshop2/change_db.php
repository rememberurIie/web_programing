<?php
    include('conn_db.php');
    session_start();

    $errors = array();

    $username = $_SESSION['username'];

    //query for show in form
    $sql_user = "SELECT * FROM user WHERE username = '$username'";
    $user_query = mysqli_query($conn, $sql_user);
    $user_result = mysqli_fetch_assoc($user_query);

    if (isset($_POST['change_user'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        if(empty($first_name)){
            array_push($errors,"Firstname Requried");
            $_SESSION['error'] = "Firstname Requried";
            header('location: change.php');
        }
        if(empty($last_name)){
            array_push($errors,"Lastname Requried");
            $_SESSION['error'] = "Lastname Requried";
            header('location: change.php');
        }
        if(empty($email)){
            array_push($errors,"Email Requried");
            $_SESSION['error'] = "Email Requried";
            header('location: change.php');
        }
        if(empty($phone)){
            array_push($errors,"Phonenumber Requried");
            $_SESSION['error'] = "Phonenumber Requried";
            header('location: change.php');
        }
        if(empty($password1)){
            array_push($errors,"Password Requried");
            $_SESSION['error'] = "Password Requried";
            header('location: change.php');
        }
        if(empty($password2)){
            array_push($errors,"Re-Password Requried");
            $_SESSION['error'] = "Re-Password Requried";
            header('location: change.php');
        }
        if($password1 != $password2){  
            array_push($errors,"Password not match!");
            $_SESSION['error'] = "Password not match!";
            header('location: change.php');
        }

        //query db
        $sql_query_check = "SELECT * FROM user WHERE email = '$email'";
        $query_check = mysqli_query($conn, $sql_query_check);
        $result_check = mysqli_fetch_assoc($query_check);

        //check data exist
        if ($result_check){
            if ($result_check['email'] === $email){
                array_push($errors,"Email already exists");
                $_SESSION['error'] = "Email already exists";
                header('location: change.php');
            }
        }

        if(count($errors) == 0){

            $password = md5($password1);

            $sql_edit = "UPDATE user SET password = '$password', email = '$email', phone = '$phone', first_name = '$first_name' , last_name = '$last_name' WHERE username = '$username'";
            mysqli_query($conn, $sql_edit);

            if( mysqli_query($conn, $sql_edit)){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Changed";
                header('location: index.php');
            }else{
                array_push($errors, "error");
                $_SESSION['error'] = "error";
                header('location: login.php');
            }
        }
        
    }


?>