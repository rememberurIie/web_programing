<?php 
    include('conn_db.php');
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
<style>
    .button{
        text-align: center;
    }
    .login-form{
        border: none;
    }
    input[type=text], input[type=password]{
        width: 100%;
        padding: 10px 10px;
        margin: 10px 0;
        display: inline-block;
        border: 1px solid gray;
        box-sizing: border-box;
    }
    button{
        background-color: rgb(44, 44, 44);
        color: white;
        padding: 10px 14px;
        margin: 10px 0;
        border: none;
        cursor: pointer;
        width: auto;
    }
    button.login{
        background-color: violet;
        margin-right: 5px;
    }
    span.forget-password{
        float: right;
        padding-top: 15px;
    }
    span.register{
        float: right;
        padding-top: 15px;
    }
    .error{
        text-align: left;;
        color: red;
    }
</style>
</head>
<body>
    <div class="button">
        <h2>Login</h2>
    </div>
    <form class="login-form" action="login_db.php" method="POST">
        <div>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="type username" name="username">

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="type password" name="password">
         
            <button class="login" type="submit" name="login_user">Login</button>

            <span class="register">You don't have account? <a href="register.php">Register</a></span>

            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

        </div>
    </form>
</body>
</html>