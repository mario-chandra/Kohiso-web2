<?php
  session_start();
    error_reporting(0);
    require 'functions.php';
    include "security.php";

  $id = $_GET["id"];


  $item = fetchData("SELECT * FROM item WHERE id = '$id'")[0];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <title>Kohiso Web Admin</title>
        <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Custom styles template ini-->
      <link href="asset/style/style_admin.css" rel="stylesheet" type="text/css" media="all">
      <link href="asset/style/style.css" rel="stylesheet" type="text/css" media="all">
      <!-- Custom Fonts Awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
   </head>
   <body style="background-color: white; color: var(--purple); padding: 33%; padding-top: 10%; padding-bottom: 0">
      <div class="text-center rounded shadow p-3">
       <h5 class="pb-2">Edit Item</h5><br>
       <form class="px-3" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $item["id"] ?>">
          <div class="d-flex justify-content-between pb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $item["name"] ?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" value="<?= $item["name"] ?>" required>  
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="<?= $item["harga"] ?>" required>  
          </div>
          <div class="row m-0">
            <div class="col-4 p-0">Select image</div>
            <input class="col-8 p-0 text-right" type="file" name="fileToUpload" id="fileToUpload" required> 
          </div><br>
          <button class="btn btn-outline-dark rounded-pill mx-2" type="submit" name="submit">edit item</button>
          <button class="btn btn-outline-dark rounded-pill mx-2" type="button" onclick="window.location.href='./tampilan.php'">cancel</button>
        </form>
      </div>

     <?php

      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      if(isset($_POST['submit'])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image. ";
          $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0; 
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "
              <script>
              alert('Sorry, your file was not accepted');
              </script>";
        // if everything is ok, try to upload file
        } else {
             if(updateData($_POST, $_FILES['fileToUpload']['tmp_name'], $_FILES['fileToUpload']['type'])>0):
                echo "<script>
                    alert('berhasil');
                    document.location.href = 'tampilan.php';
                    </script>";
              else :
                echo "
                <script>
                alert('gagal');
                </script>";
              endif;
        }
      }


      
     
      ?>


   </body>
  
 </html>
