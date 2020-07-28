<?php
  session_start();
  $username = $_SESSION["username"];

  if (!isset($_SESSION["signin"])) {
    header("Location: signin.php");
  }else {
    require 'functions.php';

    $items = fetchData("SELECT * FROM cart WHERE username = '$username'  ");

  }


  $totalHarga = 0;
 ?>

<html>

<head>
    <title>Kohiso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel='stylesheet' type="text/css" href="asset/style/style.css">
</head>

<body>
    <div class="head-container" style="height: 60%">
        <div class="container-img">
            <img src="asset/img/cart.png">
        </div>
        <div class='container-main'>
           <?php include "navbar.php" ?>


            <div class="head-title fade-in-section" style="margin-top: 1rem">
                <h1>Cart</h1>
            </div>

        </div>
    </div>


	<div class="cart-container row m-0" style="color: black">
		<div class="col-8">
          <?php $cartCount = 0; ?>



          <?php foreach ($items as $item): ?>

            <div class="row pb-3 m-0 border-bottom">
      			<div class="col-3 p-0">
      				<img src="asset/img/prd-img.png" class="w-100">
      			</div>
    			<div class="col-9" style="padding: 0; padding-left: 2rem">
          			<h3><?= $item["nama"] ?></h3>
          			<p>Price: <?= $item["harga"] ?></p>
                <a onclick="javascript: return confirm('Menghapus ?');" href="deleteCartItem.php?id=<?= $item['id'] ?>"><img src="asset/img/trash.png" style="width: 5%; position: absolute; bottom: 1rem; right: 1rem"></a>
    			</div>
            </div>
              <?php

                $namaBarang = $item["nama"];
                $hargastr = $item["harga"];
                $hargaint = (int)$hargastr;
                $totalHarga = $totalHarga + $hargaint;
                $arrCart[$cartCount] =  array(
                  "username" => $username,
                  "itemName" => $namaBarang,
                  "itemPrice" => $hargaint
                );
              $cartCount++;
              ?>
          <?php endforeach; ?>

          <?php if ($items == null): ?>
            <h1>Keranjang kamu kosong ayo belanja</h1>
          <?php endif; ?>




		</div>
        <div class="col-4 p-3 px-4">
            <div class="border rounded shadow-sm" style="padding: 2rem">
                <h5><strong>Order Summar</strong></h5>
                <div class="d-flex justify-content-between border-bottom pb-2">
                    <div>Sub Total</div>
                    <div><strong>Rp. <?= $totalHarga ?></strong></div>
                </div>
                <form class=""  method="post">
                  <button type="submit" class="btn btn-danger w-100 mt-2" name="checkout">CHECK OUT</button>
                </form>
            </div>
        </div>
	</div>



      <?php if (isset($_POST["checkout"])): ?>
        <?php if ($items == null): ?>
            <script>
              alert("keranjang kamu kosong")
              document,location.href = 'shop.php';
            </script>
          <?php else: ?>
            <?php foreach ($arrCart as $key => $value): ?>
              <?php if (checkout($value) > 0): ?>
                <?php clearCart($username); ?>
                <script>
                  alert('terima kasih ');
                  document,location.href = 'shop.php';
                  document.location.href = 'shop.php';
                </script>
              <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>


      <?php
        require "footer.php";
      ?>

    <script src="asset/script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
