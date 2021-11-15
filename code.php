<?php
session_start();
     include("connection.inc.php");
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
     $name = $_POST['name'];
     $id1 = $_POST['id'];
     $description = $_POST['description'];
     $title = $_POST['title'];
     $iprice = $_POST['iprice'];
     $eprice = $_POST['eprice'];
     $image = $_FILES['uploadfile']['name'];
     $gender = $_POST['gender'];
     $catogery = $_POST['catogery'];
     

     
     
    

     if($gender == "men"){
         if($catogery == "formal"){ $sql = "insert into formal_man values ('$id1','$name','$iprice','$eprice','$description','$title','$image')";}
         elseif($catogery == "wedding"){ $sql = "insert into wedding_men values ('$id1','$name','$iprice','$eprice','$description','$title','$image')";}
         elseif($catogery == "over"){ $sql = "insert into over_men values ('$id1','$name','$iprice','$eprice','$description','$title','$image')";}
         else{
             return "0";
         }
        
        }
    if($gender == "women"){
            if($catogery == "formal"){ $sql = "insert into formal_women values ('$id1','$name','$iprice','$eprice','$description','$title','$image')";}
            elseif($catogery == "wedding"){ $sql = "insert into wedding_women values ('$id1','$name','$iprice','$eprice','$description','$title','$image')";}
            elseif($catogery == "over"){ $sql = "insert into over_women values ('$id1','$name','$iprice','$eprice','$description','$title','$image')";}
            else{
                return "0";
            }
           
       

     }    
     
        
        $query_run = mysqli_query($con, $sql);

     if ($query_run) {
         move_uploaded_file($_FILES['uploadfile']['tmp_name'],"media/".$_FILES['uploadfile']['name']);
        $_SESSION["status"] = "image stored successfully";
        header('location:admin.php');
      } else {
        $_SESSION["status"] = "image stored successfully";
        header('location:admin.php');
      }
      

    }

    ?>