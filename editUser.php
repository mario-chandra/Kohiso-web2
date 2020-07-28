<?php
    session_start();
    error_reporting(0);
    require 'functions.php';
    include "security.php";

  $id = $_GET["id"];


  $item = fetchData("SELECT * FROM account WHERE id = '$id'")[0];

  $FirstName = $item ["FirstName"];
  $LastName = $item ["LastName"];
  $PhoneNum = $item ["PhoneNum"];
  $Gender = $item ["Gender"];
  $Username = $item ["Username"];
  $Address = $item ["Address"];
  $Password = $item ["Password"]
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Kohiso Admin</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel='stylesheet' type="text/css" href="asset/style/style.css">
</head>
   <body style="background-color: white; color: var(--purple); padding: 35%; padding-top: 40px; padding-bottom: 0">
      <div class="text-center rounded shadow p-3">
       <h5 class="pb-2">Edit User</h5><br>
       <form class="px-3" method="post">
          <input type="hidden" name="id" value="<?= $item["id"] ?>">
          <div class="d-flex justify-content-between pb-3">
            <label for="FirstName">First Name</label>
            <input type="text" name="FirstName" id="FirstName" value="<?php echo $FirstName;?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="LastName">Last Name</label>
            <input type="text" name="LastName" id="LastName" value="<?php echo $LastName;?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="PhoneNum">Phone Number</label>
            <input type="text" name="PhoneNum" id="PhoneNum" value="<?php echo $PhoneNum;?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="Gender">Gender</label>
            <input type="text" name="Gender" id="Gender" value="<?php echo $Gender;?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="FirstName">Username</label>
            <input type="text" name="Username" id="FirstName" value="<?php echo $Username;?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="Address">Address</label>
            <input type="text" name="Address" id="FirstName" value="<?php echo $Address;?>" required>
          </div>
          <div class="d-flex justify-content-between pb-3">
            <label for="FirstName">Password</label>
            <input type="password" name="Password" id="Password" value="<?php echo $Password;?>" required>
          </div>
          <br>
          <button class="btn btn-outline-dark rounded-pill mx-2" type="button" onclick="window.location.href='./useraccount.php'">Cancel</button>
          <button type="submit" class="btn btn-outline-dark rounded-pill mx-2"  name="submit">Submit</button>
        </form>
      </div>




   </body>
 </html>

  <?php

        if (isset($_POST["submit"])) {
          if(editUser($_POST)> -1){
            echo "<script>
                alert('User detail are succes being edited');
                document.location.href = 'useraccount.php';
                </script>";
          }
          else{
            echo "<script>
                alert('Failed to edit user detail');
                document.location.href = 'editUser.php';
                </script>";
        }
      }


   ?>
