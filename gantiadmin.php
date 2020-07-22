<?php
  require 'functions.php';
include "security.php";


  $id = $_GET["id"];


  $item = fetchData("SELECT * FROM admin WHERE id = '$id'")[0];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>EDIT ITEM</h1>
     <form class="" method="post">
       <input type="hidden" name="id" value="<?= $item["id"] ?>">
       <label for="name">Username:</label>
       <input type="text" name="username" id="username" >
       <br>
       <label for="deskripsi">password:</label>
       <input type="password" name="password" id="password" >
       <br>
       <button type="submit" name="submit">submit</button>
     </form>

     <?php
     if(isset($_POST["submit"])):
       if(gantiAdmin($_POST)>0):
         echo "<script>
              alert('berhasil');
              document.location.href = 'adminuser.php';
              </script>";
       else :
         echo "gagal";
       endif;
     endif;
      ?>

      <a href="adminuser.php">kembali</a>


   </body>
 </html>
