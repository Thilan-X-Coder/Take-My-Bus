<?php
require_once "host.php";
$conn = mysqli_connect('localhost','root','','takemybus');

if(isset($_POST['submit']))
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
   
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);



    $select = "SELECT * FROM admin WHERE email = '$mail' AND PASS = '$password'";
    $results = mysqli_query($conn, $select);

    if(mysqli_num_rows($results) > 0)
    {
        $error[] = 'User already exist !';
    }

    else if($password ==$cpassword)
    {
        $sql= "INSERT INTO admin (F_name, L_name,  email, PASS) 
        VALUES ('$Fname', '$Lname','$mail', '$password')";

        $result =mysqli_query($conn, $sql);

        if(!$result)
        {
            $error[] = 'Something went wrong !';
        }
        else
        {
            $msg[] = 'Registration Successfull !';
        }

    }
    else
    {
        $error[] = 'Password not mached !';
    }
  
}

?>




<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="ll.css">

</head>
<body>
    <header>
        <a href="index.php" class="logo">Take My Bus</a>
        <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
            <li><a href="sign-up(b).php">Register Your Bus</a></li>
            <li><a href="login(b).php">Login</a></li>
            <li><a href="register.html">Signup</a>
            <li><a href="admin_login.php" class="active">Staff</a>
            <li><a href="#">About Us</a></li>
        </ul>
        </nav>
    </header>
    
    <div class="container">
        <div class="forms">
                <div class="form login">
                <span class="title">Admin Registration</span>
                
                <form action="" method="POST">

                <?php
                if(isset($error))
                {
                    foreach($error as $error)
                    {
                        echo '<span class="error-msg">'.$error.'</span>';
                    }  
                }

                
                if(isset($msg))
                {
                    foreach($msg as $msg)
                    {
                        echo '<span class="msg">'.$msg.'</span>';
                    }
                }
                ?>




                    <div class="input-field">
                        <input type="text" name="Fname" placeholder="Enter your First name" required>
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="input-field">
                        <input type="text" name="Lname" placeholder="Enter your Last name" required>
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                   
                
                     <div class="input-field">
                        <input type="text" name="mail" placeholder="Enter your Email" required>
                        <ion-icon name="mail-open-outline"></ion-icon>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Enter your password" required>
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="input-field">
                        <input type="password" name="cpassword" placeholder="Confirm your password" required>
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    
                    <div class="input-field button">
                        <input type="submit" name="submit" value="Sign Up">
                    </div>   

                  
                    
                </form>
                <script>
            if(window.history.replaceState)
            {
                window.history.replaceState(null,null,window.location.href)
            }
            </script>
                <h5>Or</h5>
                <p>Have an account ? <a href="admin_login.php">Login here</a></p>
            </div>    
        </div>
    </div>
    
    <br><br>
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