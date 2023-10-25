<?php
require 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['Nama'];
    $no_hp = $_POST['No_hp'];
    $email = $_POST['Email'];

    $sql = "INSERT INTO Customer (nama, no_hp, email) VALUES ('$nama', '$no_hp', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'dashboard.php';
        </script>";

        // Setelah data berhasil ditambahkan, eksekusi ulang kueri untuk mengambil data pelanggan
        $result = mysqli_query($conn, "SELECT * FROM Customer");
        $customer = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $customer[] = $row;
        }
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
        </script>";
    }
}
?>
