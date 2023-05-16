<?php
require 'host.php';
$conn = mysqli_connect('localhost','root','','takemybus');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Search</title>

    <!--custom style sheet-->

    <link rel="stylesheet" href="zz.css">
    

<style>
 @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800);
* {
  box-sizing: border-box;
}

html,
body {
  overflow-x: hidden;
  font-family: "Open Sans", sans-serif;
  font-weight: 300;
  color: black;
  background: white;
}

.row {
  max-width: 800px;
  margin: 0 auto;
  padding: 60px 30px;
  background: white;
  font-size: medium;
  color: white;
  position: relative;
  z-index: 1;
  text-align: center;
}
.row1  {
  max-width: 8000px;
  margin: 0 auto;
  padding: 60px 0px;
  color: #000080;
  font-size: 30px;
  font-family: "Open Sans", sans-serif;
  background-color: #fff;
  position: relative;
  z-index: 1;
  text-align: center;
}
.row:before {
  position: absolute;
  content: "";
  display: block;
  top: 0;
  left: -5000px;
  height: 100%;
  width: 15000px;
  z-index: -1;
  background: inherit;
}
.row:first-child {
  padding: 40px 30px;
}
.row:nth-child(2), .row:nth-child(8), .row:nth-child(10) {
  background: white;
}
.row:nth-child(3), .row:nth-child(7) {
  background: white;
}
.row:nth-child(4), .row:nth-child(6) {
  background: #000080;
}
.row:nth-child(5) {
  background: #000080;
}
.row span {
  position: relative;
  display: inline-block;
  margin: 30px 10px;
}

.basic-slide {
  display: inline-block;
  width: 215px;
  padding: 35px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 70px;
  transition: all .3s ease-in-out;
}
.basic-slide::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.basic-slide + label {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 20px 20px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #083484;
  transition: all .3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.basic-slide:focus,
.basic-slide:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.basic-slide:focus::-webkit-input-placeholder,
.basic-slide:active::-webkit-input-placeholder {
  color: #aaa;
}
.basic-slide:focus + label,
.basic-slide:active + label {
  transform: translateX(-100%);
}

.clean-slide {
  position: relative;
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: white;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 60px;
  transition: all .3s ease-in-out;
}
.clean-slide::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.clean-slide + label {
  display: inline-block;
  position: absolute;
  transform: translateX(0);
  top: 0;
  left: 0;
  bottom: 0;
  padding: 13px 15px;
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  color: #032429;
  text-align: left;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4);
  transition: all .3s ease-in-out, color .3s ease-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  overflow: hidden;
}
.clean-slide + label:after {
  content: "";
  position: absolute;
  top: 0;
  right: 100%;
  bottom: 0;
  width: 100%;
  background: #7AB893;
  z-index: -1;
  transform: translate(0);
  transition: all .3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.clean-slide:focus,
.clean-slide:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.clean-slide:focus::-webkit-input-placeholder,
.clean-slide:active::-webkit-input-placeholder {
  color: #aaa;
}
.clean-slide:focus + label,
.clean-slide:active + label {
  color: #fff;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  transform: translateX(-100%);
}
.clean-slide:focus + label:after,
.clean-slide:active + label:after {
  transform: translate(100%);
}

.gate {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 65px;
  transition: all .3s ease-in-out;
}
.gate::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.gate + label {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7AB893;
  transition: all .4s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  transform-origin: left bottom;
  z-index: 99;
}
.gate + label:before, .gate + label:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 3px;
  background: #377D6A;
  transform-origin: left bottom;
  transition: all .4s ease-in-out;
  pointer-events: none;
  z-index: -1;
}
.gate + label:before {
  background: rgba(3, 36, 41, 0.2);
  z-index: -2;
  right: 20%;
}

span:nth-child(2) .gate {
  text-indent: 85px;
}

span:nth-child(2) .gate:focus,
span:nth-child(2) .gate:active {
  text-indent: 0;
}

.gate:focus,
.gate:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.gate:focus::-webkit-input-placeholder,
.gate:active::-webkit-input-placeholder {
  color: #aaa;
}
.gate:focus + label,
.gate:active + label {
  transform: rotate(-66deg);
  border-radius: 3px;
}
.gate:focus + label:before,
.gate:active + label:before {
  transform: rotate(10deg);
}

.skinny {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 75px;
  transition: all .3s ease-in-out;
}
.skinny::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.skinny + label {
  display: inline-block;
  position: absolute;
  transform: translateX(0);
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  transition: all .3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  overflow: hidden;
}
.skinny + label:before, .skinny + label:after {
  content: "";
  position: absolute;
  right: 0;
  left: 0;
  z-index: -1;
  transition: all .3s ease-in-out;
}
.skinny + label:before {
  top: 5px;
  bottom: 5px;
  background: #377D6A;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.skinny + label:after {
  top: 0;
  bottom: 0;
  background: #377D6A;
}

.skinny:focus,
.skinny:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
}
.skinny:focus::-webkit-input-placeholder,
.skinny:active::-webkit-input-placeholder {
  color: #aaa;
}
.skinny:focus + label,
.skinny:active + label {
  transform: translateX(-100%);
}
.skinny:focus + label:after,
.skinny:active + label:after {
  transform: translateX(100%);
}

.slide-up {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 80px;
  transition: all .3s ease-in-out;
}
.slide-up::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.slide-up + label {
  display: inline-block;
  position: absolute;
  transform: translateX(0);
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  transition: all .3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  overflow: hidden;
}
.slide-up + label:before, .slide-up + label:after {
  content: "";
  position: absolute;
  right: 0;
  left: 0;
  z-index: -1;
  transition: all .3s ease-in-out;
}
.slide-up + label:before {
  top: 6px;
  left: 5px;
  right: 5px;
  bottom: 6px;
  background: #377D6A;
}
.slide-up + label:after {
  top: 0;
  bottom: 0;
  background: #377D6A;
}

span:nth-child(1) .slide-up {
  text-indent: 105px;
}

span:nth-child(3) .slide-up {
  text-indent: 125px;
}

span:nth-child(1) .slide-up:focus,
span:nth-child(1) .slide-up:active,
span:nth-child(3) .slide-up:focus,
span:nth-child(3) .slide-up:active {
  text-indent: 0;
}

.slide-up:focus,
.slide-up:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
}
.slide-up:focus::-webkit-input-placeholder,
.slide-up:active::-webkit-input-placeholder {
  color: #aaa;
}
.slide-up:focus + label,
.slide-up:active + label {
  transform: translateY(-100%);
}
.slide-up:focus + label:before,
.slide-up:active + label:before {
  border-radius: 5px;
}
.slide-up:focus + label:after,
.slide-up:active + label:after {
  transform: translateY(100%);
}

.card-slide {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 115px;
  transition: all .3s ease-in-out;
}
.card-slide::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.card-slide + label {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7AB893;
  transition: all .3s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  transform-origin: right center;
  transform: perspective(300px) scaleX(1) rotateY(0deg);
}

span:nth-child(2) .card-slide {
  text-indent: 55px;
}

span:nth-child(3) .card-slide {
  text-indent: 150px;
}

span:nth-child(2) .card-slide:focus,
span:nth-child(2) .card-slide:active,
span:nth-child(3) .card-slide:focus,
span:nth-child(3) .card-slide:active {
  text-indent: 0;
}

.card-slide:focus,
.card-slide:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.card-slide:focus::-webkit-input-placeholder,
.card-slide:active::-webkit-input-placeholder {
  color: #aaa;
}
.card-slide:focus + label,
.card-slide:active + label {
  transform: perspective(600px) translateX(-100%) rotateY(80deg);
}

.swing {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 60px;
  transition: all .3s ease-in-out;
}
.swing::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.swing + label {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7AB893;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  transform-origin: 2px 2px;
  transform: rotate(0);
  animation: swing-back .4s 1 ease-in-out;
}

@keyframes swing {
  0% {
    transform: rotate(0);
  }
  20% {
    transform: rotate(116deg);
  }
  40% {
    transform: rotate(60deg);
  }
  60% {
    transform: rotate(98deg);
  }
  80% {
    transform: rotate(76deg);
  }
  100% {
    transform: rotate(82deg);
  }
}
@keyframes swing-back {
  0% {
    transform: rotate(82deg);
  }
  100% {
    transform: rotate(0);
  }
}
.swing:focus,
.swing:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.swing:focus::-webkit-input-placeholder,
.swing:active::-webkit-input-placeholder {
  color: #aaa;
}
.swing:focus + label,
.swing:active + label {
  animation: swing 1.4s 1 ease-in-out;
  transform: rotate(82deg);
}

.balloon {
  display: inline-block;
  width: 215px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 60px;
  transition: all .3s ease-in-out;
}
.balloon::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.balloon + label {
  display: inline-block;
  position: absolute;
  top: 8px;
  left: 0;
  bottom: 8px;
  padding: 5px 15px;
  color: #032429;
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0);
  transition: all .3s ease-in-out;
  border-radius: 3px;
  background: rgba(122, 184, 147, 0);
}
.balloon + label:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  top: 100%;
  left: 50%;
  margin-left: -3px;
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  border-top: 3px solid rgba(122, 184, 147, 0);
  transition: all .3s ease-in-out;
}

.balloon:focus,
.balloon:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
}
.balloon:focus::-webkit-input-placeholder,
.balloon:active::-webkit-input-placeholder {
  color: #aaa;
}
.balloon:focus + label,
.balloon:active + label {
  color: #fff;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7ab893;
  transform: translateY(-40px);
}
.balloon:focus + label:after,
.balloon:active + label:after {
  border-top: 4px solid #7ab893;
}



    </style>
    </head>

    <body>

    <header>
        <a href="index.php" class="logo">Take My Bus</a>
        <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
            <li><a href="sign-up(b).php">Register Your Bus</a></li>
            <li><a href="loging.php">Logins</a></li>
            <li><a href="register.html" >Signup</a></li>
            <li><a href="admin_login.php" >Staff</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        </nav>
    </header>

    <div class="row1">
  <p>Ride Beyond the Hype.</p>
</div>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="row">
  <span>
    <input class="basic-slide" id="name" type="text" placeholder="Your starting place" name="from" /><label for="From">From</label>
  </span>
  <span>
    <input class="basic-slide" id="email" type="text" placeholder="Your destination" name="to" /><label for="To">To</label>
  </span>
  <span>
    <input name="btn" id="phone" type="submit" value="Find" style="background: #083484;
color: white;
border-style: outset;
border-color: #083484;
height: 50px;

padding: 25px 10px;
width: 100px;
border-radius: 5px;
font:  18px arial,sans-serif;
text-shadow: none;">
  </span>
</div>
</form>
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
<?php

  if(isset($_POST["btn"]))
  {
    $frm=$_POST["from"];
    $to=$_POST["to"];

    $sql = "SELECT * FROM adminroom WHERE FROM_ LIKE '%$frm%' AND TO_ = '$to' ";

    $result =$conn->query($sql);

    if($result->num_rows>0)
    { 
       
                while($row = $result->fetch_assoc())
                {?>
               
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
                    <a href="map.html" class="btn"> <i class="fas fa-edit"></i>Select</a>
                    
                   
                </td>
            </tr>

        
                </div>       
    
          
            <?php  }  ?>
            <?php  }  else
            {
                echo "<script> alert('No records')</script>";
            } ?>
           
            <?php  }  ?>
           
  
  
?>

        
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
     
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>