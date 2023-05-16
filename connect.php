<?php
//error_reporting(0);
// database connection code
if(isset($_POST['submit'])){

    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost','root','','takemybus');


    // get the post record
    $ownership =$_POST['ownership'];
    $regnum =$_POST['regnum'];
    $bustype =$_POST['bustype']; 
    $root =($_POST['root']);
    $seatcount =($_POST['seatcount']);
    $email =($_POST['email']);
    $password =md5($_POST['password']);
    $cpassword =md5($_POST['cpassword']);

    if($password==$cpassword){

        $sql = "SELECT * FROM bus WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('woops! Email Already Exists..');</script>";
            
        }
        else{
            // database insert SQL code
            $sql = "INSERT INTO `bus`(`id`, `ownership`, `reg_num`, `bus_type`, `root_num`, `seat_count`, `email`, `password` ) VALUES('0','$ownership','$regnum','$bustype', '$root', '$seatcount', '$email', '$password')";
        

            $rs = mysqli_query($con,$sql);
            if($rs){
            
                echo "Submit Successfully.......!";
                $ownership='';
                $regnum='';
                $bustype='';
                $root='';
                $seatcount='';
                $email='';

                $_POST['password']='';
                $_POST['cpassword']='';

                
                
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
