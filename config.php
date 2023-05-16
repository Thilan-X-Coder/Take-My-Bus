<?php
//error_reporting(0);
// database connection code
if(isset($_POST['submit'])){

    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $list = mysqli_connect('localhost','root','','takemybus');


    // get the post record
    $username =$_POST['username'];
    $mobilenum =$_POST['mobilenum'];
    $email =$_POST['email'];
    $password =($_POST['password']);
    $cpassword =($_POST['cpassword']);

    if($password==$cpassword){

        $sql = "SELECT * FROM user WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($list,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('woops! Email Already Exists..');</script>";
            
        }
        else{
            // database insert SQL code
            $sql = "INSERT INTO `user`(`id`, `username`, `mobilenum`, `email`, `password`) VALUES('0','$username','$mobilenum','$email', '$password')";
        

            $rs = mysqli_query($list,$sql);
            if($rs){
            
                echo "Submit Successfully.......!";
              
                
            }
            else{
                echo "<script>alert('woops! Something went wrong');</script>";

            }
        }

    }

    else{
        echo "<script>alert('Password Not Matched!!!!!');</script>";
    }
    //insert in database   
}


?>