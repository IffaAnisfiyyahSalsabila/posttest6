<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="CSS/add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataaksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Data</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" placeholder="John Doe" required>
        </div>
        <div class="inputBox">
          <label for="">No Hp</label>
          <input type="text" name="nohp" placeholder="100000" required>
        </div>
        <div class="inputBox">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="10" required>
        </div>
        <div class="inputBox">
          <label for="">Foto</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah Data" name="tambah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>