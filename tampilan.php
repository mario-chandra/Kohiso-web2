<?php
    session_start();
    error_reporting(0);
    require 'functions.php';
    include "security.php";

    $items = fetchData("SELECT * FROM item");




    // $query = "SELECT * FROM item";
    //
    // $result = mysqli_query($conn,$query);




    // while ($datas = mysqli_fetch_assoc($result)) {
    //   var_dump($datas["name"]);
    // }

    $i = 1

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kohiso Web Admin</title>
        <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Custom styles template ini-->
      <link href="asset/style/style_admin.css" rel="stylesheet" type="text/css" media="all">
      <link href="asset/style/style.css" rel="stylesheet" type="text/css" media="all">
      <!-- Custom Fonts Awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="admin.js"></script>
  </head>
  <body style="background-color: white; padding-right: 10%; padding-left: 10%">
    <h1 class="py-3" style="color: var(--purple)">Edit Produk</h1>

    <table class="table rounded shadow-sm table-striped display" style="background-color: white" id="adminTabel">
      <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Pengaturan</th>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
      </tr>
        </thead>
        <tbody>
      <?php foreach($items as $item):?>
      <tr>

        <td><?= $i; ?></td>
        <td> 
          <button class="btn btn-sm btn-outline-dark w-25 mr-2" onclick="window.location.href='gantiitem.php?id=<?= $item['id'] ?>">Edit</button>
          <button class="btn btn-sm btn-outline-dark w-25 mr-2" onclick="window.location.href='hapusitem.php?id=<?= $item['id'] ?>">Delete</button>
        </td>
        <?= "<td>".$item['id']."</td>" ?>
        <?= "<td>".$item['name']."</td>" ?>
        <?= "<td>".$item['harga']."</td>" ?>
        <?= "<td>".$item['deskripsi']."</td>" ?>
      </tr>
      <?php $i++ ?>
    <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  </body>
</html>
