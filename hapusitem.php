<?php

  session_start();
    error_reporting(0);
    require 'functions.php';
    include "security.php";
  $name = $_GET["id"];

  if(deleteData($name) > 0 ){
    echo "
      <script>
      alert('Item are succesfully being erased');
      document,location.href = 'tampilan.php';
      </script>
    ";
  }

 ?>
