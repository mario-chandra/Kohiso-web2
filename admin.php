<?php
error_reporting(0);
session_start();
include 'functions.php';
if(isset($_SESSION["data_admin"]))
{
 header("location:adminhome.php");
}

 $user = mysqli_real_escape_string($conect, $_POST['username']);
 $pass = mysqli_real_escape_string($conect, $_POST['password']);
 $pass_md5= md5($pass);
 $kode = strtolower(mysqli_real_escape_string($conect, $_POST['kode']));


  if(isset($_POST['login'])){
    if($user == ""){
    $er_email="<div class='alert alert-warning alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button>
    <strong>Username Kosong !</strong> <br> Username wajib diisi</div>";
    }
    elseif($pass == ""){
    $er_pass="<div class='alert alert-warning alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button>
    <strong>Password Kosong !</strong> <br> Password Wajib diisi</div>";
    }
    elseif($_SESSION['kode_session'] != $kode){
    $er_kode="<div class='alert alert-warning alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button>
    <strong>Kode Salah !</strong> <br> Ulangi Kode Dengan Benar</div>";
    }
    else{
    $sql_cek=mysqli_query($conect, "SELECT * FROM admin where username='$user' and password='$pass_md5'");
    $cek_admin=mysqli_num_rows($sql_cek);
    if($cek_admin == "0"){
    $er_email="<div class='alert alert-danger alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button><strong>Login Gagal !</strong> <br>Username dan Password tidak valid</div>";
    }
    else{
    $_SESSION['data_admin']=$user;
    echo "<script>alert('Selamat Datang di Halaman Admin !');document.location='adminhome.php'</script>";

     }
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kohiso Web Admin</title>
        <!-- Bootstrap core CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Custom styles template ini-->
        <link href="asset/style/style_admin.css" rel="stylesheet" type="text/css" media="all">
        <!-- Custom Fonts Awesome-->
        <link href="asset/font/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php echo $hostname;?>/asset/script/bootstrap.js"></script>
        <script src="<?php echo $hostname;?>/asset/script/ie10-viewport-bug-workaround.js"></script>

    </head>
    <body class="bodylogin">
    <div class="container"> <!-- start container -->
         <div class="row"><!-- start row -->
              <div class="col-lg-12"><!-- start col lg 12-->
                   <div class="login"><!-- start class login -->
                        <h1>LOGIN ADMIN WEB KOHISO</h1>
                   <!-- start form login -->
                   <form action="" method="post" class="formlogin">
                   <div class="form-group row"><!--start form-group-->
                        <label class="col-lg-3">Email </label>
                        <div class="col-lg-8 input-group input-group-sm"><span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input type="text" name="username" placeholder="username" class="form-control" maxlength="40" value="<?php echo $_POST['username'];?>" autofocus>
                        </div>
                   </div><!--/form-group-->

                   <?php echo $er_email;?>
                   <div class="form-group row"><!--start form-group-->
                        <label class="col-lg-3">Password</label>
                        <div class="col-lg-8 input-group  input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                        <input id="pass1" type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $_POST['password'];?>" maxlength="15">
                        </div>
                        </div><!--/form-group-->
                   <?php echo $er_pass;?>
                   <div class="form-group row"><!--start form-group-->

                        <label class="col-lg-4">Kode Captcha</label>
                        <div class="col-lg-8">
                        <div class="col-lg-5">
                        <img id="kd" alt="kode" src="<?php echo 'kode.php';?>">
                        </div>
                        <div class="col-lg-5">
                        <input id="kode" type="text" name="kode" placeholder="Kode" class="form-control text-center" value="<?php echo $_POST['kode'];?>" maxlength="6">
                        </div>
                        </div>
                        </div><!--/form-group-->
                   <?php echo $er_kode;?>

                   <button class="btn btn-primary btn-block" type="submit" name="login">Log In</button>

                   </form>
                   <!-- end form login -->
		</div><!-- end class login -->
	</div><!-- end col lg 12 -->
 </div><!-- end row -->
</div><!-- end container -->
    </body>
</html>