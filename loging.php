<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Rancho&display=swap');



*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}



body{
height: 100vh;
align-items: center;
background-position: center;
justify-content: center;
background: #fff;
}



header{
position: relative;
top: 0;
left: 0;
width: 100%;
min-height: 100px;
padding: 20px 50px;
display: flex;
background: #083484;
justify-content: space-between;
align-items: center;
}



header .logo{
color: #fff;
font-weight: 700;
text-decoration: none;
font-size: 2em;
text-transform: uppercase;
letter-spacing: 2px;
z-index: 10;

}



header ul{
display: flex;
justify-content: center;
align-items: center;
z-index: 10;
}



header ul li{
list-style: none;
margin-left: 20px;
z-index: 10;
}



header ul li a{
text-decoration: none;
padding: 6px 15px;
color: #fff;
border-radius: 20px;
z-index: 5;
}



header ul li a:hover,header ul li a.active{
background: #fff;
color:#2b1055;

}


body{
    height: 100vh;
    align-items: center;
    background-position: center;
    justify-content: center;
    background: #fff;
}



.container{
    position: relative;
    width: 500px;
    height: 450px;
    margin: 100px auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

.container .profile
{
    text-align: center;
    width: 500px;
    padding-top: 30px;
}

.container .profile img
{
    height: 150px;
    width: 150px;
    border-radius: 50%;
    margin-bottom: 5px;
    margin-right: 5px;
    justify-content: center;
}
.container .profile .title{
    text-align: center;
    position: relative;
    font-size: 27px;
    font-weight: 600;
}

.profile .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: #4070f4;
    border-radius: 25px;
}

.container a{
    background-color: #0470f4;
    color: white;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    padding: 10px;
    font-size: 15px;
}

.update-profile
{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
   

.update-profile form
{
    padding: 20px;
    background-color: white;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);;
    text-align: center;
    width: 700px;
    text-align: center;
    border-radius: 5px;
}

.update-profile form img
{
    height: 200px;
    width: 200x;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 5px;
}

.update-profile form .flex
{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    gap: 15px;
}

.update-profile form .flex .inputBox
{
    width: 47%;
}

.update-profile form .flex .inputBox span
{
    text-align: left;
    display: block;
    margin-top: 15px;
    font-size: 17px;
    font-weight: 400;


}

.update-profile form .flex .inputBox .box
{
    width: 90%;
    border-radius: 2px;
    padding: 12px 14px;
    font-size: 17px;
    margin-top: 10px;
    border: 1px solid #999;

}

.update-profile form .txt
{
    padding-top: 15px;
    padding-bottom: 15px;
    font-weight: 500;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: large;
}

.update-profile form .error-msg
{
    margin: 10px 0;
    display: block;
    color: red;
    font-size: 20px;
}

form .btn
{
    background-color: #0470f4;
    color: white;
    text-align: center;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
}

form .btn1
{
    background-color: #f40404;
    color: white;
    text-align: center;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    padding: 10px;
    font-size: 10px;
    cursor: pointer;
}

form a{
    background-color: #0470f4;
    color: white;
    text-align: center;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    padding: 10px;
    font-size: 10px;
}

footer{
    position: relative;
    width: 100%;
    background: #083484;
    min-height: 100px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }
    
    
    
    footer .social_icon,footer .fmenu{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0px;
    }
    footer .social_icon li, footer .fmenu li{
    list-style: none;
    }
    footer .social_icon li a{
    font-size: 2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
    }
    footer .social_icon li a:hover{
    transform: translate(-10px);
    }
    
    
    
    footer .fmenu li a{
    font-size: 1.2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    text-decoration: none ;
    opacity: 0.75;
    }
    footer .fmenu li a:hover{
    opacity: 1;
    }




@media (max-width:650px)
{
    .update-profile form .flex
    {
        flex-wrap: wrap;
        gap: 0;
    }

    .update-profile form .flex .inputBox
    {
        width: 100%;
    }
}

    </style>
  
    
</head>
<body>
<header>
        <a href="index.php" class="logo">Take My Bus</a>
        <nav>
        <ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="sign-up(b).php">Register Your Bus</a></li>
            <li><a href="loging.php" class="active">Login</a></li>
            <li><a href="register.html">Signup</a>
            <li><a href="admin_login.php">Staff</a>
            <li><a href="#">About Us</a></li>
        </ul>
            
        </nav>
    </header>
    <div class="container">
        
        <form action="log(u).php" method="post" class="login-email">
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <p class="login-text" style="font-size: 2rem; font-weight:800";>Login</p>
            <div class="input-group">
                <i class="fa fa-user" aria-hidden="true"></i>  
                <input type="email" placeholder="Email" name="email" required>
            </div>

            <div class="input-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>

            
            <button class="btn" name="submit1">Login</button>
            <br><br>
            
            <p class="Login-register-text">Don't have an account? <a href="register.html">Register Here</a>.</p>
        </form>
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