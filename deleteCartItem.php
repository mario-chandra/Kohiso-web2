<?php
require 'functions.php';
$name = $_GET["id"];

if(deleteItemCart($name) > 0 ){
  echo "
    <script>
    alert('Cart Item are succesfully being erased');
    document,location.href = 'account.php';
    </script>
  ";
}
else{
  echo "
    <script>
    document,location.href = 'account.php';
    </script>
  ";
}

 ?>
