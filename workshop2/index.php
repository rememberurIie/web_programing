<?php
    include('conn_db.php');
    session_start();
    
    if (!isset($_SESSION['username'])){
        $_SESSION['msg'] = "Login first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    if (isset($_GET['change'])){
        header('location: change.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>

    <body>

        <div class="header">
            <p><a href="index.php">Home</a><p/>
            <p><a href="register.php">Register</a><p/>
        
        </div>

        <div class="content"> 

            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <?php if (isset($_SESSION['change'])) : ?>
                <div class="success">
                    <h3>
                        <?php 
                            echo $_SESSION['change'];
                            unset($_SESSION['change']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                <p><a href="index.php?change='1'" style="color: green;">Change Information</a></p>
            <?php endif ?>

        </div>

    </body>

</html>