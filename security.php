<?php
if(!isset($_SESSION['data_admin'])){
        header('location:logout.php');
}
else{
$akun=$_SESSION['data_admin'];
$admin=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_admin where email_admin='$akun'"));
}
?>