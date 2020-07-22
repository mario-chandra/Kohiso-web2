<?php
  require 'functions.php';

  $items = fetchData("SELECT * FROM admin");

  $i = 1;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Daftar admin</h1>

     <table border="1" cellpadding = "10" cellspacing = "0" >
       <tr>

         <th>no</th>
         <th>pengaturan</th>
         <th>id</th>
         <th>nama</th>
         <th>password</th>
       </tr>
       <?php foreach($items as $item):?>
       <tr>

         <td><?= $i; ?></td>
         <td>
           <a href="gantiadmin.php?id=<?= $item['id'] ?>">edit</a>
           <a href="hapusadmin.php?id=<?= $item['id'] ?>">hapus</a>
         </td>
         <?= "<td>".$item['id']."</td>" ?>
         <?= "<td>".$item['username']."</td>" ?>
         <?= "<td>".$item['password']."</td>" ?>
       </tr>
       <?php $i++ ?>


     <?php endforeach; ?>

     </table>

   </body>
 </html>
