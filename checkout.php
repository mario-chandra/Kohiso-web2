<?php
 require 'functions.php';
 $results = fetchData("SELECT * FROM checkout ORDER BY status");
 $i = 1;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table border="1" cellpadding = "10" cellspacing = "10">
       <tr>
         <th>no</th>
         <th>ID</th>
         <th>Username</th>
         <th>Nama Barang</th>
         <th>harga</th>
         <th>Status</th>
         <th>opsi</th>
       </tr>
       <?php foreach ($results as $result): ?>
         <tr>
           <td><?=$i ?></td>
           <td><?= $result["id"]; ?></td>
           <td><?= $result["username"];  ?></td>
           <td><?= $result["nama"]; ?></td>
           <td><?= $result["harga"] ?></td>
           <td><?= $result["status"] ?></td>
           <td>
             <form class=""  method="get">
               <input type="hidden" name="id" value="<?= $result["id"]  ?>">
               <input type="hidden" name="username" value="<?= $result["username"]  ?>">
               <input type="hidden" name="nama" value="<?= $result["nama"]  ?>">
               <input type="hidden" name="harga" value="<?= $result["harga"]  ?>">
               <input type="hidden" name="status" value="<?= $result["status"]  ?>">
               <?php $delete = false; ?>
               <button type="submit" name="kirim">kirim</button>
               <button type="submit" name="batal">batal</button>
               <button type="submit" name="hapus">hapus</button>
             </form>
           </td>
         </tr>
       <?php endforeach; ?>

       <?php
        if (isset($_GET["hapus"])) {
            if (hapusCheckout($result["id"]) > 0) {
              echo "
              <script>
                alert ('berhasil')
                document,location.href = 'checkout.php';
              </script>
              ";
            }else {
              echo "
                <script>
                  alert('gagal')
                </script>
              ";
            }
          }


        if (isset($_GET["kirim"])) {
          if (kirim($_GET)>0) {
            echo "
            <script>
              alert ('berhasil')
              document,location.href = 'checkout.php';
            </script>
            ";
          }else {
            echo "
              <script>
                alert('berhasil')
                document,location.href = 'checkout.php';
              </script>
            ";
          }
        }

        if (isset($_GET["batal"])) {
          if (batal($_GET)>0) {
            echo "
            <script>
              alert ('berhasil')
              document,location.href = 'checkout.php';
            </script>
            ";
          }else {
            echo "
              <script>
                alert('berhasil')
                document,location.href = 'checkout.php';
              </script>
            ";
          }
        }
        ?>

       <a href="admin.php">kembali</a>


     </table>

   </body>
 </html>
