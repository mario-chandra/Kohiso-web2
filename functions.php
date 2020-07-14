<?php

  $conn = mysqli_connect("localhost","root","","kohiso");


  function addItem($data){

    global $conn;
    $name = $data["name"];
    $deskripsi = $data["deskripsi"];
    $harga = $data["harga"];

    $query = "INSERT INTO item
    VALUES (
      '$name' , '$deskripsi' , '$harga'
    ) ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
  }

 ?>
