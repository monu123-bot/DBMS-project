<?php 
session_start();
include("connection.inc.php");
  
$product_id=$_GET['id'];
   
$catagory = $_GET['catagory'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['costumer_name'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $locality = $_POST['locality'];
    $district = $_POST['district'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $time = "02:00";
    $product_id1 = $product_id;
    $catagory1 = $catagory;

    $sql = "insert into orders values ('$id','$name','$dob','$time','$city','$street','$district','$locality','$phone','$email','$product_id','$catagory1')";
    print_r($sql);
    $query_run = mysqli_query($con, $sql);
    if ($query_run) {
        $_SESSION["status"] = "Order placed successfully";
        echo "pass";
    //    header('location:admin.php');
     } 
    else {
       $_SESSION["status"] = "Order failed";
    //    header('location:admin.php');
     echo 'pass';
     }
    }

?>