<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <!-- //forloop -->
 <?php for($i=0;$i<5;$i++): ?>
 hello
 <?php endfor; ?>

 <!-- if else -->
 <?php
 $a = 2;
 if($a==1){
     ?>if executed<?php
 }
 else{
     ?>not executed<?php
 }
 ?>
 <!-- function -->
 <?php
 function show($a){?>
 
 <a href="#">www.
     <?php echo $a ?>
     </a>
     <?php
 }
  show("google");
 ?>
 <!-- arry -->
 <?php
 $ary = array(1,2,3);
 
 $ary2 = array(4,5,6);
 print_r($ary + $ary2);
 function add($a,$b){
     foreach ($ary as $a) {
         

     }
 }
 
 echo "<br>";
 print_r(array_merge($ary,$ary2));
 ?>
</body>
<script>
    let dlt_btn = document.getElementById("dlt_btn")
    dlt_btn.addEventListener("click",function(){
        alert("delete")
    })
</script>
</html>