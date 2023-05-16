
<?php 
session_start();
require_once "connect.php";
$list = mysqli_connect('localhost','root','','takemybus');
 
if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email)){
        header("Location:loging.php?error= User Name is required");
        exit();
    }else if(empty($password)){
        header("Location:loging.php?error= Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM bus WHERE `email`='$email' AND `password`='$password'";
        $result =mysqli_query($list, $sql);
        
        if(mysqli_num_rows($result)==1){
           $row = mysqli_fetch_assoc($result);
           if ($row['email']=== $email  && $row['password'] === $password) {
               
                header("Location:anjula2.php");
                exit();

               
           }else{
                header("Location:login(b).php?error=Incorrect User Email or Password");
                exit();      
           }
        }else{
            header("Location:login(b).php?error=Incorrect User Email or Password");
            exit();

        }
    }
}
else{
    header("Location:sign-up(b).php");
    exit();
}



?>