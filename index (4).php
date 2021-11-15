<?php

include("connection.inc.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raj Tailor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
 
<!-- style="background-image: url('media/tailor_back.jpg'); background-size:cover;" -->
<body >
  <div style="background-image: url('media/tailor_back.jpg');background-size:cover;height:100vh;border: 6px solid rgb(230, 178, 49);border-radius: 12px;">
    
    <div  style="margin-left: auto;height:4rem;  background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red; margin-right: auto;width: 80vw;text-align: center; padding: 6px; font-family: fantasy; text-shadow: -1px 2px grey;">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <p style="color: black; font-size: 2rem;" class="nav-link active" aria-current="page"
          href="#"><i>Raj Tailors</i></p>
      </li>
      <li class="nav-item">
        <a style="color: black;" class="nav-link active" aria-current="page"
          href="#"><i>Home</i></a>
      </li>
      <li class="nav-item">
        <a style="color: black;" class="nav-link" href="#"><i>Contact</i></a>
      </li>
      <li class="nav-item">
        <a style="color: black;" class="nav-link" href="#"><i>Explore</i></a>
      </li>
      <li class="nav-item">
        <a style="color: black;" class="nav-link" href="admin_login.php"><i>Admin</i></a>
      </li>

    </ul>
  </div>
  <hr>
  <div style="width: 90vw;margin:auto;text-align: center;">
    <h2 style=" font-family: 'Allison', cursive;color:yellow;text-shadow: -4px 4px grey;">Fashion is like eating, you
      shouldn't stick to the same menu</h2>
  </div>
  <div
    style="text-align: center; width: 80vw;margin-left: auto;margin-right:auto;display: flex;flex-direction: row; margin-top:4vh">
    <div class="card"
      style="width: 15rem; margin-left: auto;margin-right: auto; padding: 5px;border-radius: 12px;border: 2px solid black;">
      <img src="media/mens.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="dropdown">
          <button style="background-color:black ;color: white;" class="btn btn-secondary dropdown-toggle" type="button"
            id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Men's Collection</i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a style="background-color:black ;color: white;" id="men_formal_btn" href="#mens_formal_collection"
              class="dropdown-item "><i>Men's formal Collection</i></a>

            <a style="background-color:black ;color: white;" id="men_wedding_btn" href="#mens_wedding_collection"
              class="dropdown-item "><i>Men's wedding Collection</i></a>
            <a style="background-color:black ;color: white;" id="men_over_btn" href="#mens_over_collection"
              class="dropdown-item "><i>Men's over Collection</i></a>

          </div>
        </div>
      </div>
    </div>
    <div class="card"
      style="width: 15rem;margin-left: auto;margin-right: auto;padding: 5px;border-radius: 12px;border: 2px solid black;">
      <img src="media/womens.jpg" class="card-img-top" alt="...">
      <div class="card-body">

        <div class="dropdown">
          <button style="background-color:black ;color: white;" class="btn btn-secondary dropdown-toggle" type="button"
            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i>Women's Collection</i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <a style="background-color:black ;color: white;" id="women_formal_btn" href="#womens_formal_collection"
              class="dropdown-item "><i>Women's formal Collection</i></a>

            <a style="background-color:black ;color: white;" id="women_wedding_btn" href="#womens_wedding_collection"
              class="dropdown-item "><i>Women's wedding Collection</i></a>
            <a style="background-color:black ;color: white;" id="women_over_btn" href="#womens_over_collection"
              class="dropdown-item"><i>Women's over Collection</i></a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
  <div  class="collection_container "  id="mens_formal_collection">
    <h2 style="margin-left: auto;background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red; margin-right: auto;width: 50vw;text-align: center; padding: 6px; font-family: fantasy; text-shadow: -1px 2px grey;">Men's formal collection</h2><hr>
    <?php
    $sql = "SELECT  id,name, iprice,eprice,description,title,image FROM formal_man";
    $result = mysqli_query($con,$sql);
  //  $array1 = mysqli_fetch_array($result);
  

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    
    ?>
    
    <div  class="card" style="width: 13rem;hide:20rem; border-radius:10px;padding:5px ; text-align:center">
      <img  class="card-img-top" src="media/<?php echo $row['image']?>" alt="Card image cap">
      <div class="card-body">
        <b style="font-size:15px" class="card-title"><?php echo $row['name']?></b> |
        <b style="font-size:15px"> <?php echo $row['iprice']?> $ - <?php echo $row['eprice']?> $</b>
        <p class="card-text"><?php echo $row['description']?></p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <a style="color:black" href='order.php?id= <?php echo $row['id'] ?>&catagory=formal_man'><i>Place Order</i></a>
        </button>
      </div>
    </div>
<?php  }
} 
?>



  </div>
  <div class="collection_container " id="womens_formal_collection">
    <h2 style="margin-left: auto;background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red;margin-right: auto;width: 50vw;text-align: center; padding: 6px; font-family: fantasy; text-shadow: -1px 2px grey;">Women's formal collection</h2><hr>
    <?php
    $sql = "SELECT  id,name, iprice,eprice,description,title,image FROM formal_women";
$result = $con->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    ?>
    
    <div  class="card" style="width: 13rem; hide:20rem;border-radius:10px;padding:5px ; text-align:center">
      <img   class="card-img-top" src="media/<?php echo $row['image']?>" alt="Card image cap">
      <div class="card-body">
        <b style="font-size:15px" class="card-title"><?php echo $row['name']?></b> |
        <b style="font-size:15px"> <?php echo $row['iprice']?> $ - <?php echo $row['eprice']?> $</b>
        <p class="card-text"><?php echo $row['description']?></p>
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           <a style="color:black" href='order.php?id=<?php echo $row['id'] ?>&catagory=formal_women'><i>Place Order</i></a>
         </button>
      </div>
    </div>
<?php  }
} 
?>

    


  </div>
  <div class="collection_container "  id="mens_wedding_collection">
    <h2 style="margin-left: auto;margin-right: auto;background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red;width: 50vw;text-align: center; padding: 6px; font-family: fantasy; text-shadow: -1px 2px grey;">Men's wedding collection</h2><hr>
    <?php
    $sql = "SELECT  id,name, iprice,eprice,description,title,image FROM wedding_men";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    ?>
    
    <div  class="card" style="width: 13rem;hide:20rem; border-radius:10px;padding:5px ; text-align:center">
      <img  class="card-img-top" src="media/<?php echo $row['image']?>" alt="Card image cap">
      <div class="card-body">
        <b style="font-size:15px" class="card-title"><?php echo $row['name']?></b> |
        <b style="font-size:15px"> <?php echo $row['iprice']?> $ - <?php echo $row['eprice']?> $</b>
        <p class="card-text"><?php echo $row['description']?></p>
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           <a style="color:black" href='order.php?id= <?php echo $row['id'] ?>&catagory=wedding_men'><i>Place Order</i></a>
         </button>
      </div>
    </div>
<?php  }
} 
?>



  </div>
  <div class="collection_container "  id="womens_wedding_collection">
    <h2 style="margin-left: auto;margin-right: auto;width: 50vw;text-align: center;background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red; padding: 6px; font-family: fantasy; text-shadow: -1px 2px grey;">Women's wedding collection</h2><hr>
    <?php
    $sql = "SELECT  id,name, iprice,eprice,description,title,image FROM wedding_women";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    ?>
    
    <div  class="card" style="width: 13rem;hide:20rem; border-radius:10px;padding:5px ; text-align:center">
      <img   class="card-img-top" src="media/<?php echo $row['image']?>" alt="Card image cap">
      <div class="card-body">
        <b style="font-size:15px" class="card-title"><?php echo $row['name']?></b> |
        <b style="font-size:15px"> <?php echo $row['iprice']?> $ - <?php echo $row['eprice']?> $</b>
        <p class="card-text"><?php echo $row['description']?></p>
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           <a style="color:black" href='order.php?id= <?php echo $row['id'] ?>&catagory=wedding_women'><i>Place Order</i></a>
         </button>
      </div>
    </div>
<?php  }
} 
?>


  </div>
  <div class="collection_container " id="mens_over_collection">
    <h2 style="margin-left: auto;margin-right: auto;width: 50vw;text-align: center; padding: 6px;background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red; font-family: fantasy; text-shadow: -1px 2px grey;">Men's over collection</h2><hr>
    <?php
    $sql = "SELECT  id,name, iprice,eprice,description,title,image FROM over_men";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    ?>
    
    <div  class="card" style="width: 13rem; hide:20rem; border-radius:10px;padding:5px ; text-align:center">
      <img   class="card-img-top" src="media/<?php echo $row['image']?>" alt="Card image cap">
      <div class="card-body">
        <b style="font-size:15px" class="card-title"><?php echo $row['name']?></b> |
        <b style="font-size:15px"> <?php echo $row['iprice']?> $ - <?php echo $row['eprice']?> $</b>
        <p class="card-text"><?php echo $row['description']?></p>
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           <a style="color:black" href='order.php?id= <?php echo $row['id'] ?>&catagory=over_men'><i>Place Order</i></a>
         </button>
      </div>
    </div>
<?php  }
} 
?>





  </div>
  <div class="collection_container "  id="womens_over_collection">
    <h2 style="margin-left: auto;margin-right: auto;width: 50vw;text-align: center; padding: 6px; font-family: fantasy;background-color: rgb(230, 178, 49);margin-top: 14px;border-radius: 12px;box-shadow: 0px 5px 6px red; text-shadow: -1px 2px grey;">Women's over collection</h2><hr>
    <?php
    $sql = "SELECT  id,name, iprice,eprice,description,title,image FROM over_women";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    ?>
    
    <div  class="card" style="width: 13rem;hide:20rem; border-radius:10px;padding:5px ; text-align:center">
      <img   class="card-img-top" src="media/<?php echo $row['image']?>" alt="Card image cap">
      <div class="card-body">
        <b style="font-size:15px" class="card-title"><?php echo $row['name']?></b> |
        <b style="font-size:15px"> <?php echo $row['iprice']?> $ - <?php echo $row['eprice']?> $</b>
        <p class="card-text"><?php echo $row['description']?></p>
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           <a style="color:black" href='order.php?id= <?php echo $row['id'] ?>&catagory=over_women'><i>Place Order</i></a>
         </button>
      </div>
    </div>
<?php  }
} 
?>


  </div>

  

<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="border-radius: 15px;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: whitesmoke;">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: whitesmoke;">
        <div style="align-items: center;margin: auto;background-color: rgb(255, 255, 204);border-radius: 20px; padding: 15px;">
           
            </div>
    </div>
     
    </div>
  </div>
</div>


  
</body>
<style>
  .card {
    display: inline-block;
    margin: 15px;
  }

  .collection_container {
    border: 2px solid black;
    height: 100vh;
    overflow-y: scroll;
   
    

  }

  ul li a:hover {

    font-size: 1.9rem;
    transform: rotate(3deg);


  }

  ul li a {
    font-size: 1.8rem;
    font-family: 'Allison', cursive;
    color: black;
  }

  .show {
    display: block;

  }

  .hide {
    display: none;
  }
</style>

</html>