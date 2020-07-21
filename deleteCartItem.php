<?php
require 'functions.php';
$name = $_GET["id"];

if(deleteItemCart($name) > 0 ){
  echo "
    <script>
    alert('data berhasil dihapus');
    document,location.href = 'cart.php';
    </script>
  ";
}

 ?>
