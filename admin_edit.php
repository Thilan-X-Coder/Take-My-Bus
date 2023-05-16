<?php

@include 'host.php';
$conn = mysqli_connect('localhost','root','','takemybus');

if(isset($_POST['add_package']))
{
    $frm = $_POST['from'];
    $to = $_POST['to'];
    $bus_image = $_FILES['bus_image']['name'];
    $bus_image_tmp_name = $_FILES['bus_image']['tmp_name'];
    $bus_image_folder = 'uploaded_img/'.$bus_image;
    $distance = $_POST['distance'];
    $price = $_POST['price'];
    $route = $_POST['route'];
    $type = $_POST['type'];
    $own = $_POST['own'];
    $seat = $_POST['seat'];

    if(empty($frm) || empty($to) || empty($price) || empty($route))
    {
        $message[] = 'Please fill out all';
    }
    else
    {
        $insert = "INSERT INTO adminroom(IMG,FROM_,TO_,DISTANCE,PRICE,ROUTR,TYPE,OWNERSHIP,SEAT) VALUES('$bus_image', '$frm', '$to', '$distance','$price','$route','$type','$own','$seat')";
        $upload = mysqli_query($conn,$insert);
        if($upload)
        {
            move_uploaded_file($bus_image_tmp_name, $bus_image_folder);
            $message[] = 'New route added successfully';
        }
        else
        {
            $message[] = 'Could not add the route';
        }
    }

};

if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    mysqli_query($conn, "DELETE FROM adminroom WHERE ID=$id");
    header('location:admin_edit.php');
};


?>



<!DOCTYPE html>
<html>
    <head>
    <title>Admin Page</title>

    <!--custom style sheet-->

    <link rel="stylesheet" href="zz.css">
    </head>

    <body>

    <header>
        <a href="index.php" class="logo">Take My Bus</a>
        <nav>
        <ul>
        <li><a href="index.php" >Home</a></li>
            <li><a href="sign-up(b).php">Register Your Bus</a></li>
            <li><a href="login(b).php">Login</a></li>
            <li><a href="register.html">Signup</a>
            <li><a href="admin_login.php">Staff</a>
            <li><a href="Login.php">About Us</a></li>
        </ul>
        </nav>
    </header>

    <?php
        if(isset($message))
        {
            foreach($message as $message)
            {
                echo '<span class="message">'. $message .'</span>';
            }
        }

    ?>
    

    <div class="container">
        <div class="admin-package-form-container">

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"  enctype="multipart/form-data">
        
            <h3>Add a new Routine</h3>
            <input type="text" placeholder="from" name="from" class="box">
            <input type="text" placeholder="to" name="to" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="bus_image" class="box">
            <input type="text" placeholder="distance" name="distance" class="box">
            <input type="number" placeholder="enter price" name="price" class="box">
            <input type="text" placeholder="route permit number" name="route"  class="box">
            <select name="type">
                <option value="Normal">Normal</option>
                <option value="Semi luxary">Semi luxary</option>
                <option value="Intercity">Intercity</option>
            </select>
            <select name="own">
                <option value="SLTB">SLTB</option>
                <option value="Private">Private</option>
            </select>
            <input type="text" placeholder="seat" name="seat" class="box">
            <input type="submit" class="btn" name="add_package" value="add Route">
            <a href="adminpr.php" class="btn">go back</a>
        
            </form>


        </div>

           <?php
                $select = mysqli_query($conn, "SELECT * FROM adminroom");
           ?> 


        <div class="project-display">

        <table class="package-display-table">

        <thead>
            <tr>
                <th>Bus image</th>
                <th>From</th>
                <th>To</th>
                <th>Distance</th>
                <th>Price</th>
                <th>Type</th>
                <th>Ownership</th>
                <th>Seat</th>
                <th colspan="2">action</th>
            </tr>
        </thead>

        <?php while($row = mysqli_fetch_assoc($select)) {?>

            <tr>
                <td><img src="uploaded_img/<?php echo $row['IMG']; ?>" height="100" alt=""></td>
                <td><?php echo $row['FROM_']; ?></td>
                <td><?php echo $row['TO_']; ?></td>
                <td><?php echo $row['DISTANCE']; ?></td>
                <td><?php echo $row['PRICE']; ?></td>
                <td><?php echo $row['TYPE']; ?></td>
                <td><?php echo $row['OWNERSHIP']; ?></td>
                <td><?php echo $row['SEAT']; ?></td>
                <td>
                   
                    <a href="admin_edit.php?delete=<?php echo $row['ID']; ?>" class="btn"> <i class="fas fa-trash"></i>delete</a>
                </td>
            </tr>

        <?php  }  ?>

        <script>
            if(window.history.replaceState)
            {
                window.history.replaceState(null,null,window.location.href)
            }
            </script>

        </table>

        </div>


    </div>

    
    <footer>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
        </ul>
        <ul class="fmenu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Stays</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <p>Copyright © 2022 Let's Go.com™. All rights reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>