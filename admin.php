<?php 
session_start();
include('connection.inc.php');


  if(! isset( $_SESSION['username'])){
  header("location: admin_login.php");
} 
?>


<!DOCTYPE html>
<html>


<head>
  <title>My Awesome Login Page</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
</head>


<body style="background-image: url('media/5651978.png');  background-size: cover; display: flex;flex-direction: row;">
  <!-- sidebar -->
 


 
  <!-- sidebar -->
  <div id="menu" style="height: 100vh;border-right:1px solid  grey;width: 20vw; text-align: center; border-bottom: 1px solid grey; box-shadow: 0px 3px 6px grey;">
    <div style="text-align: center;padding:4px;align-self: center; background-color: rgba(0, 0, 0, 0.596);color: wheat; height: 8vh;border-bottom:1px solid grey;border-top: 1px solid grey;">
      <h3><i>Menu bar</i></h3>
    </div>
    <div id="sub_menu" style="height: 92vh; background-color: rgba(116, 111, 111, 0.27);">
    <br><br>
    
     <button class="link btn btn-primary" href="#"  class="" data-toggle="modal" data-target="#exampleModal">
      Add Item
     </button>
     <br><br><br>
     <button id="order_link" class="link btn btn-primary" href="">Orders</button><br><br><br>
     <button class="link btn btn-primary" href=""> Complaints</button><br><br><br>
     <a class="link btn btn-primary" href="index.php"> Go to costumer site</a><br><br><br>
     <a class="link btn btn-primary" href="logout.php"> Logout</a><br><br><br>

    
    

    </div>
  </div>
  <div   style="border: 1px solid grey;overflow-y:auto;overflow-x:auto; border-radius: 12px; width: 70vw; height: 90vh; margin-top: auto;margin-left: auto;margin-right: auto;margin-bottom: auto;background-color: rgba(16, 16, 26, 0.521);">
  <div id="orders" >
  <?php 
   $sql = 'select * from orders';
   $orders = mysqli_query($con,$sql);
   
  
?>
     <table class="table">
  <thead style="color: white; background-color: rgba(0, 0, 0, 0.678);">
    <tr>
     
      <th scope="col">Order_id</th>
      <th scope="col">Costumer name</th>
      <th scope="col">D.O.B</th>
      <th scope="col">City</th>
      <th scope="col">Street</th>
      <th scope="col">Locality</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Product id</th>
      <th scope="col">Product catagory</th>
      <th scope="col">Time</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody style="color: white;">
    <?php 
     if ($orders->num_rows > 0) {
      // output data of each row
      while($row = $orders->fetch_assoc()) {
       
        ?>

    <tr>
      <th scope="row"><?php echo $row['order_id'] ?></th>
     
      <td><?php echo $row['costumer_name'] ?></td>
     
      <td><?php echo $row['dob'] ?></td>
      <td><?php echo $row['city'] ?></td>
      <td><?php echo $row['street'] ?></td>
      <td><?php echo $row['locality'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['product_id'] ?></td>
      <td><?php echo $row['product_catagory'] ?></td>
      <td><?php echo $row['time'] ?></td>
      <td><button class="btn btn-success">Delivered </button> </td>
    </tr>
    <?php
    }}
     
    

  ?>
    
   
  </tbody>
</table>
</div>
  </div>

  

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div style="border-radius: 15px;" class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: whitesmoke;">
          <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: whitesmoke;">
          <div
            style="align-items: center;margin: auto;background-color: rgb(255, 255, 204);border-radius: 20px; padding: 15px;">
            <form style="text-align: center;" action="code.php" method="POST" enctype="multipart/form-data">
              <br>
              <b>Fill details</b><br>
              <input class="abc" type="number" name="id" placeholder="id">

              <input class="abc" type="text" name="name" placeholder="name">
              <input class="abc" type="text" name="title" placeholder="title">
              <input class="abc" type="text" name="description" placeholder="desc.">
              <input class="abc" type="number" name="iprice" placeholder="min. price">
              <input class="abc" type="number" name="eprice" placeholder="max. price">
              <input class="abc" type="file" name="uploadfile"><br>
              <b>Select Gender</b><br>

              women
              <input name="gender" type="checkbox" value="women">

              men <input name="gender" type="checkbox" value="men">
              <br>
              <b>Select Catogery</b><br>



              wedding
              <input name="catogery" type="checkbox" value="wedding">
              formal
              <input name="catogery" type="checkbox" value="formal">
              over
              <input name="catogery" type="checkbox" value="over">
              <br>
              <hr>

              <button class="abc btn btn-primary" style="padding: 5px;" type="submit" name="sub_btn">submit</button>


            </form>
          </div>
        </div>

      </div>
    </div>
  </div>




</body>
<style>
  .abc {
    border-radius: 6px;
    border: .5px solid black;
    padding: 3px;
    margin: 6px;
  }
  .link {
    color: black;
    text-decoration: none;
    font-size: 18px;
    width: 10vw;
  }
  .link :hover{
    
    color: grey;
  }
  #orders{
    display:none;
  }
</style>
<script>
   document.getElementById("order_link").addEventListener("click",()=>{
     document.getElementById("orders").style.display = "block";
   })
</script>