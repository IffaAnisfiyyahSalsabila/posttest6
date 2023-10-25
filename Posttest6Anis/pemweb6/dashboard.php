<?php
require 'koneksi.php';


$result = mysqli_query($conn, "SELECT * FROM customer"); 

$customer = [];

while ($row = mysqli_fetch_assoc($result)){
    $customer[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Staff</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>
<body>
        </nav>
        <main class="dash-container">
            <section class="dash-nav-bar">

                <hr><br>
                <div class="leading-btn">
                    <a href="tambah.php"><button class="add-btn">Tambah</button></a>
                    <button class="history-btn">Histori</button>
                </div><br>
            </section>
            <section class="dash-main">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No_HP</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($customer as $cust) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $cust["nama"] ?></td>
                            <td><?php echo $cust["no_hp"] ?></td>
                            <td><?php echo $cust["email"] ?></td>
                            <td class="action">
                                <a href="edit.php?id=<?php echo $cust["id"] ?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Z"/></svg></button></a>
                                <a href="hapus.php?id=<?php echo $cust["id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
