<?php
  require "koneksi.php";

  $id = $_GET["id"];
  $sql = "SELECT * FROM customer WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="CSS/add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="editDataaksi.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <h3>Edit</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" value="<?php echo $row["nama"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">No Hp</label>
          <input type="text" name="nohp" value="<?php echo $row["nohp"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Email</label>
          <input type="text" name="email" value="<?php echo $row["email"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Foto</label>
          <input type="file" name="foto" value="<?php echo $row["foto"] ?>" required>
        </div>
        <input type="submit" value="Ubah Data" name="ubah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>