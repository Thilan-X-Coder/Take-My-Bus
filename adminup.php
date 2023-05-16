<?php

include 'host.php';
session_start();

$user_id = $_SESSION['email'];


if(isset($_POST['update_profile']))
{
    $update_name1 = mysqli_real_escape_string($conn, $_POST['updateF']);
    $update_name2 = mysqli_real_escape_string($conn, $_POST['updateL']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);


    $select = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$user_id'") or die('query failed');
    if(mysqli_num_rows($select) > 0)
    {
        $fetch = mysqli_fetch_assoc($select);
    };

    // if($fetch['F_name'] != $update_name1 || $fetch['L_name'] != $update_name2 || $fetch['email'] != $update_EMAIL)
    // {
    //     header('location:admin_login.php');
    // }

                


    
    mysqli_query($conn, "UPDATE admin SET F_name = '$update_name1', L_name = '$update_name2', email = '$update_email' WHERE email = '$user_id'") or die('query failed');



    $old_pass = $_POST['old_pass'];
    $update_pass = md5($_POST['update_pass']);
    $new_pass = md5($_POST['new_pass']);
    $confirm_pass = md5($_POST['confirm_pass']);

    if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass))
    {
        if($update_pass != $old_pass)
        {
            $error[] = 'Old password not matched';
        }
        else if($new_pass != $confirm_pass)
        {
            $error[] = "Confirm password not matched";
        }
        else
        {
            mysqli_query($conn, "UPDATE admin SET PASS = '$confirm_pass' WHERE email = '$user_id'") or die('query failed');
            $error[] = "Password updated succesfully";
        }
    }
/*
    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_img/'.$update_image;

    if(!empty($update_image))
    {
        if($update_image_size > 2000000)
        {
            $error[] = "Image is too large";
        }
        else
        {
            $image_update_query = mysqli_query($conn, "UPDATE users SET image = '$update_image' WHERE MAIL = 'user_id'") or die('query failed');

            if($image_update_query)
            {
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
            }

            $error[] = "Image updated successfully";


        }

    }

*/




}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile update</title>
        <link rel="stylesheet" href="xzx.css">

    </head>

    <body>

    <header>
        <a href="hm.php" class="logo">Take My Bus</a>
        <nav>
        <ul>
        <li><a href="#" class="active">Home</a></li>
            <li><a href="sign-up(b).php">Register Your Bus</a></li>
            <li><a href="login(b).php">Login</a></li>
            <li><a href="#">Signup</a>
            <li><a href="admin_login.php">Staff</a>
            <li><a href="Login.php">About Us</a></li>
        </ul>
        </nav>
    </header>

    <div class="update-profile">
            <?php
                $select = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0)
                {
                    $fetch = mysqli_fetch_assoc($select);
                };
        
            ?>

            <form action="" method="post" enctype="multipart/form-data">

                    <?php

                        if(isset($error))
                        {
                            foreach($error as $error)
                            {
                                echo '<span class="error-msg">'.$error.'</span>';
                            }  
                        }
                    
                  
                        echo '<img src="avatar.png">';
                        
                  
                    ?>

                    <div class="txt">
                                  <?php echo $fetch['F_name']; echo $fetch['L_name']; ?> 
                    </div>

                        

                <div class="flex">
                    <div class="inputBox">
                        <span>First name : </span>
                        <input type="text" name="updateF" value="<?php  echo $fetch['F_name'];?>" class="box">
                        <span>Last name : </span>
                        <input type="text" name="updateL" value="<?php echo $fetch['L_name']; ?>" class="box">
                        <span>Email : </span>
                        <input type="email" name="update_email" value="<?php  echo $fetch['email'];?>" class="box">
                       <!-- <span>Update profile picture : </span>
                        <input type="file" name="update_image" class="box" accept="image/jpg, image/jpeg, image/png"> -->
                    </div>
                    <div class="inputBox">
                        <input type="hidden" name="old_pass" value="<?php  echo $fetch['PASS'];?>">
                        <span>Old password : </span>
                        <input type="password" name="update_pass" placeholder="Enter previous password" class="box">
                        <span>New password : </span>
                        <input type="password" name="new_pass" placeholder="Enter new password" class="box">
                        <span>Confirm password : </span>
                        <input type="password" name="confirm_pass" placeholder="Confirm password" class="box">

                    </div>
                </div>
                <input type = "submit" value="update profile" name="update_profile" class="btn">
                <a href="adminpr.php" class="delete-btn">Go back</a>
            </form>

            <script>
            if(window.history.replaceState)
            {
                window.history.replaceState(null,null,window.location.href)
            }
            </script>
    </div>
    <footer>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
        </ul>
        <p>Copyright © 2022 TakeMyBus™. All rights reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    </body>
</html>