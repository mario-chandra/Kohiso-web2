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
      DEFAULT, '$username' , '$nama' , '$harga'
    )";

    mysqli_query($conn,$query);
    $result = mysqli_affected_rows($conn);

    if ($result>0) {
      echo "
        <script>
        alert('Product succesfully added to cart');
        document.location.href = 'shop.php';
        </script>
      ";
    }
    else {
      echo "
        <script>
        alert('Fail to add to cart');
        document.location.href = 'shop.php';
        </script>
      ";
    }
  }
 ?>
