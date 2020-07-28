<?php
session_start();
    error_reporting(0);
    require 'functions.php';
    include "security.php";
$name = $_GET["id"];

if(deleteAdmin($name) > 0 ){
  echo "
    <script>
    alert('Admin are succesfully being erased');
    document,location.href = 'adminuser.php';
    </script>
  ";
}
?>
