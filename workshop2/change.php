<?php
    include('change_db.php');
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
    input[type=text], input[type=password], input[type=email]{
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
    button.submit{
        float: left;
        padding-top: 15px;
        background-color: violet;
    }
    button.cancel{
        float: left;
        padding-top: 15px;
        margin-left: 10px;
    }
    span.already_member{
        float: right;
        padding-top: 20px;
    }
    .error{
        text-align: left;
        padding-top: 50px;
        padding-bottom: 15px;
        color: red;
    }
</style>
</head>
<body>
    <div class="button">
        <h2>Change Information</h2>
    </div>
    <form action="change_db.php" method="post" class="login-form">
        <div>
            <label for="first_name"><b>Firstname</b></label>
            <input type="text" placeholder="Type Firstname" name="first_name" value="<?php echo $user_result['first_name'];?>">

            <label for="last_name"><b>Lastname</b></label>
            <input type="text" placeholder="Type Lastname" name="last_name" value="<?php echo $user_result['last_name'];?>">

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Type Email" name="email" value="<?php echo $user_result['email'];?>">

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Type Phone Number" name="phone" value="<?php echo $user_result['phone'];?>">

            <label for="username"><b>Username</b></label>
            <input type="text" disabled placeholder="Type Username" name="username" value="<?php echo $user_result['username'];?>">

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Type Password" name="password1">

            <label for="password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Type Password again" name="password2">
         

            <button type="submit" class="submit" name="change_user">Change</button>
            <button type="button" class="cancel" onclick="window.location.href='index.php';">Cancel</button>

            <br>
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