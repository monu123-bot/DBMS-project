<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>


</head>

<body style="background-color: cadetblue;">

  <?php 
    // session_start();
     include('connection.inc.php');
     
     
     $product_id=$_GET['id'];
    
     $catagory = $_GET['catagory'];
     
 
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $id = $_POST['id'];
         $name = $_POST['costumer_name'];
         $dob = $_POST['dob'];
         $city = $_POST['city'];
         $street = $_POST['street'];
         $locality = $_POST['locality'];
         $district = $_POST['district'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $time = date('r');
         $product_id1 = $product_id;
         $catagory1 = $catagory;
         
         
 
         $sql = "insert into orders values ('$id','$name','$dob','$time','$city','$street','$district','$locality','$phone','$email','$product_id','$catagory1')";
         
         $query_run = mysqli_query($con, $sql);
         $success = false;
         if ($query_run) {
             $_SESSION["status"] = "Order placed successfully";
             $seccess = true;
 
             
         //    header('location:admin.php');
          } else {
            $_SESSION["status"] = "Order failed";
         //    header('location:admin.php');
          
          }
     
     
     }
 
     ?>
  <div style="text-align: center;">
    <h3 style="font-style: italic;text-shadow: -3px 3px grey;">Place your order..</h3>
  </div>

  <div id="container">


    <form id="form" action="" method="post">
      <input class="inp" type="text" name="id" placeholder="id" required>
      <input class="inp" type="text" name="costumer_name" placeholder="Enter full name" required><br>


      <input class="inp" type="text" name="city" placeholder="Enter city" required>
      <input class="inp" type="text" name="street" placeholder="Enter street" required>
      <input class="inp" type="date" name="dob" placeholder="D.O.B" required><br>
      <input class="inp" type="text" name="locality" placeholder="Enter locality" required>
      <input class="inp" type="text" name="district" placeholder="Enter district" required>
      <input class="inp" type="number" name="phone" placeholder="Enter phone number" required>
      <input class="inp" type="email" name="email" placeholder="Enter email" required><br><br>

      <a class="" data-toggle="modal" data-target="#exampleModal">

        <b>Term and Conditions</b>
      </a>
      <input id="check" type="checkbox" required><br>

      <p>Please read term and conditions before placing your order carefully</p>
      <b>Currently we have only cash on delivery..</b>
      <button type="submit" class="btn btn-success ">Confirm order</button>
      <hr>
      <a href="index.php">Back to shopping..</a>



    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div style="border-radius: 15px;" class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: whitesmoke;">
            <h5 class="modal-title" id="exampleModalLabel">Term and conditions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: whitesmoke;">
            <div
              style="align-items: center;margin: auto;background-color: rgb(255, 255, 204);border-radius: 20px; padding: 15px;">
              <b>If you placed an order by filling fake details, you will be traced by your ip address.<br>
                if you placed an order and don't be able to purchase it then you have to confirm us.</b>
            </div>
          </div>

        </div>
      </div>
    </div>


  </div>


</body>
<style>
  .show {
    display: block;
  }

  .hide {
    display: none;
  }

  #container {
    width: 50vw;
    margin-left: auto;
    margin-right: auto;
    height: 80vh;
    margin-top: 4vh;



    border-radius: 12px;
    padding-top: 30px;
    padding-bottom: 30px;
    align-items: center;
    text-align: center;
    background-color: whitesmoke;
  }

  .inp {
    margin: 6px;
    border-radius: 6px;
    border: 2px solid cadetblue;
    box-shadow: 2px 2px 3px grey;
    padding: 3px;
    width: 20vw;
  }
</style>
<script>




</script>

</html>