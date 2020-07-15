<?php

  $conn = mysqli_connect("localhost","root","","kohiso");


  function addItem($data){

    global $conn;
    $name = $data["name"];
    $deskripsi = $data["deskripsi"];
    $harga = $data["harga"];

    $query = "INSERT INTO item
    VALUES (
     '',  '$name' , '$deskripsi' , '$harga'
    ) ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
  }

  function fetchData($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $datas = [];
    while ($data = mysqli_fetch_assoc($result)) {
      $datas[] = $data;
    }
    return $datas;
  }

  function deleteData($data){
   global $conn;
   mysqli_query($conn,"DELETE FROM item WHERE id = '$data'");
   return mysqli_affected_rows($conn);
 }

  function updateData($data){
    global $conn;
    $id = $data["id"];
    $name = $data["name"];
    $deskripsi = $data["deskripsi"];
    $harga = $data["harga"];

    $query = "UPDATE item SET
      name ='$name' ,
      deskripsi = '$deskripsi' ,
      harga = '$harga'
      WHERE id = $id";


    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
  }

 ?>
