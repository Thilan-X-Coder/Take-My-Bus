<?php

include 'host.php';
$conn = mysqli_connect('localhost','root','','takemybus');
session_start();
$user_id = $_SESSION['email'];

if(!isset($user_id))
{
    header('location:Login.php');
};

if(isset($_GET['logout']))
{
    unset($user_id);
    session_destroy();
    header('location:admin_login.php');
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="xzx.css">



    </head>
   


    <body>

    <header>
        <a href="hm.php" class="logo">Take My Bus</a>
        <nav>
        <ul>
        <li><a href="hm.php" class="active">Home</a></li>
            <li><a href="sign-up(b).php">Register Your Bus</a></li>
            <li><a href="login(b).php">Login</a></li>
            <li><a href="#">Signup</a>
            <li><a href="admin_login.php">Staff</a>
            <li><a href="Login.php">About Us</a></li>
        </ul>
        </nav>
    </header>

    <div class="container">
        <div class="profile">
       
            <?php
                $select = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0)
                {
                    $fetch = mysqli_fetch_assoc($select);
                }
              
                    echo '<img src="avatar.png">';
              

            ?>

            <h3> <span class="title">Admin</span><br><?php echo $fetch['F_name']; ?> <?php echo $fetch['L_name']; ?></h3>

            <br>
            <br>
            <br>
         

            <a href="adminup.php" class="btn">update profile</a>
            <a href="admin_login.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
            <br>
          
            <br>
            <a href="admin_edit.php" class="btn">Create room</a>
            
        </div>
    </div>
    <footer>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
        </ul>
        <p>Copyright © 2022 TakeMyBus.com™. All rights reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>