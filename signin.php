<?php 
session_start();
include("connection.inc.php");
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password =  $_POST['password'];

    $q = "select * from signin where username = '$username' ";
    $result  = mysqli_query($con,$q);
    $row = mysqli_num_rows($result);
   
    if($row >= 1){
        echo "username is unavailable";
    }
    else{
        $p = "insert into signin values ('$id','$username','$password')";
        $submit =  mysqli_query($con,$p);
        if($submit == true){
            echo 'submit';
            header("Location:admin_login.php");

        }
        else{
            echo $con->error;
        }


    }
}
?>