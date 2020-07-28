<?php
  require 'functions.php';
 ?>

<html>

<head>
    <title>Kohiso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel='stylesheet' type="text/css" href="asset/style/style.css">
</head>

<body>
    <div class="head-container">
        <div class="container-img">
            <img src="asset/img/head.png">
        </div>
        <div class='container-main'>
            <?php include "navbar.php" ?>

            <div class="head-title">
                <h1>SIGN UP</h1>
            </div>

        </div>
    </div>

    <div class="egift-container">

        <div class="container">

            <form class="egift" method="post">
            	<div class="row">
            		<div class="col-3"> </div>
	                <div class="col-6">
	                	<div class="row">
	                		<div class="col">
	                			<label>FIRST NAME</label>
	                    		<input class="form-control" name="firstName" required>
	                		</div>
	                		<div class="col">
	                			<label>LAST NAME</label>
	                    		<input class="form-control" name="lastName" required>
	                		</div>
	                	</div>
	                	<br>
	                	<div class="row">
	                		<div class="col">
	                			<label>PHONE NUMBER</label>
	                    		<input class="form-control" name="phoneNum" required>
	                		</div>
	                		<div class="col">
	                			<label>GENDER</label>
	                   			<select class="form-control border-0" style="background-color: var(--light)" name="gender" required>
  								    <option>Male</option>
  								    <option>Female</option>
  								    <option>Custom</option>
  								</select>
	                		</div>
	                	</div>
	                	<br>
	                    <label>USERNAME/EMAIL</label>
	                    <input class="form-control" type="email" name="username" required>
	                    <br>
	                    <label>ADDRESS</label>
	                    <input class="form-control" name="address" required>
	                    <br>
	                    <div class="row">
	                		<div class="col">
	                			<label>PASSWORD</label>
	                    		<input type="password" class="form-control" name="password" required>
	                		</div>
	                		<div class="col">
	                			<label>CONFIRM PASSWORD</label>
	                   			<input type="password" class="form-control" name="cpassword" required>
	                		</div>
	                	</div>

	                    <br>

	                </div>
	                <div class="col-3"> </div>
            	</div>
            	<br>
                <div class="w-100 text-center"><button class="btn kohiso-btn egi-btn w-25" type="submit" name="submit">SIGN UP</button></div>
            </form>
            <?php
            if(isset($_POST["submit"])){
              if ($_POST["password"] == $_POST["cpassword"]) {
                if (addAccount($_POST)>0) {
                  echo "<script> alert('Selamat bergabung! Silahkan sign in') </script>";
                }else {
                  echo "<script> alert('Sign Up GAGAL, apakah anda sudah memiliki akun dengan username yang sama ?') </script>";
                }
              }else {
                echo "password tidak sesuai";
              }
            }


             ?>
        </div>

    </div>

    <?php
        require "footer.php";
    ?>

    <script src="asset/script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
