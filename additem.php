<?php
  $conn = mysqli_connect("localhost","root","","kohiso");
  var_dump($_POST);

  if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];

    $query = "INSERT INTO item
    VALUES (
      '$name' , '$deskripsi' , '$harga'
    ) ";

    mysqli_query($conn,$query);

    $check = mysqli_affected_rows($conn);
    

  }


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>ADD ITEM</h1>
     <form class="" method="post">
       <label for="name">Name:</label>
       <input type="text" name="name" id="name" value="">
       <br>
       <label for="deskripsi">deskripsi:</label>
       <input type="text" name="deskripsi" id="deskripsi" value="">
       <br>
       <label for="harga">harga</label>
       <input type="text" name="harga" id="harga" value="">
       <br>
       <button type="submit" name="submit">add</button>
     </form>

     <?php
     if(isset($_POST["submit"])):
       if ($check > 0) :
         echo "<p>berhasil</p>";
       else :
         echo "<p>gagal</p>";
       endif;
     endif;
      ?>


   </body>
 </html>
