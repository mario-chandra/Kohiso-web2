<?php
  require 'functions.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" method="post">
      <label for="username">username</label>
      <input type="text" name="username" value="" required><br>
      <label for="password">password</label>
      <input type="password" name="password" value="" required><br>
      <label for="cpassword">konfirmasi password</label>
      <input type="password" name="cpassword" value="" required><br>

      <button type="submit" name="submit">add account</button>

    </form>

    <?php if (isset($_POST["submit"])): ?>
      <?php if ($_POST["password"] == $_POST["cpassword"]): ?>
        <?php if (addAdmin($_POST)>0): ?>
          <script>
          alert('admin berhasil ditambahkan');
          document,location.href = 'adminuser.php';
          </script>
        <?php else: ?>
          gagal
        <?php endif; ?>
        <?php else: ?>
          password tidak sesuai
      <?php endif; ?>
    <?php endif; ?>

  </body>
</html>
