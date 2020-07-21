<?php
  session_start();
  require 'functions.php';

  $username = $_SESSION["username"];
  $nama = $_POST["name"];
  $harga = $_POST["harga"];

  if (!isset($_SESSION["signin"])) {
    header("Location: signin.php");
  }else {
    $query = "INSERT INTO cart
    VALUES(
      '', '$username' , '$nama' , '$harga'
    )";

    mysqli_query($conn,$query);
    $result = mysqli_affected_rows($conn);

    if ($result>0) {
      echo "
        <script>
        alert('ditambahkan ke cart');
        document,location.href = 'shop.php';
        </script>
      ";
    }
    else {
      echo "
        <script>
        alert('gagal');
        document,location.href = 'shop.php';
        </script>
      ";
    }
  }







 ?>
