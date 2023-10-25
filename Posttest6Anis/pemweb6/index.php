<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FySw3ArS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/utama.css">
    <div id="tanggal-waktu"></div>
</head>
<body class="lightmode">
    
    <?php
        require ('header.php');
    ?>

    <h1><a href="#1" style="color: #517a7b; text-decoration: none;">FYSWEARS</a></h1>
    
    <div class="image-container">
        <img src="./img/abcd.jpeg" width="325px" height="200px" border="2">
    </div>

    <div class="contact-info">
        <p>Whatsapp : 09123456789</p>
        <p>Instagram : @fys.wears</p>
    </div>

    <h2 id="1">Frame Glasses</h2>
    <div class="center-content">
        <div class="frame-type">
            <img src="./img/1.jpg" alt="Cat Eye Glasses">
            <p>Cat Eye</p>
        </div>
        <div class="frame-type">
            <img src="./img/4.jpg" alt="Cat Eye Glasses">
            <p>Round</p>
        </div>
        <!-- <div class="frame-type">
            <img src="./img/woi.jpeg" alt="Cat Eye Glasses">
            <p>GA DIJUAL YA COK <br> GABISA DIBELI PUNYA GUE</p>
        </div> -->
        <div class="frame-type">
            <img src="./img/3.jpg" alt="Cat Eye Glasses">
            <p>Square</p>
        </div>
        <div class="frame-type">
            <img src="./img/2.jpg" alt="Cat Eye Glasses">
            <p>Butterfly</p>
        </div>
    </div>

    <h2 id="2">Contact Lens</h2>
    <div class="center-content">
    <div class="lens-type">
        <img src="./img/softlensring.jpeg" alt="">    
        Softlens Warna Ring
    </div>
    <div class="lens-type">
        <img src="./img/tanparing.jpeg" alt="">    
        Softlens Warna Tanpa Ring
    </div>
    <div class="lens-type">
        <img src="./img/bening.jpeg" alt="">    
        Softlens Bening Minus
    </div>
    </div>

    <h2 id="3">Lensa</h2>
    <div class="center-content">
        <div class="lens-type">
        <img src="./img/lensa.png" alt="">    
        Minus</div>
        <div class="lens-type">
        <img src="./img/antiradiasi.webp" alt="">     
        Anti Radiasi</div>
        <div class="lens-type">
        <img src="./img/photocr.jpeg" alt="">    
        Photocromic</div>
    </div>

    <h2 id="6">About Me</h2>
    <div class="about-me">
        <div class="personal-info">
            <p>Nama: Iffa Anisfiyyah Salsabila</p>
            <p>TTL: Bontang, 10 Maret 2005</p>
            <p>NIM: 2209106109</p>
        </div>
        <div class="additional-info">
            <p>Passionate about eyewear fashion</p>
            <p>Follow me on Instagram: @iffa.eyewear</p>
        </div>
    </div>
   
    <a href="test.php"><h2>Tambah Data</h2></a>
        
    

    <form>
    <h1>Custom Lensa</h1>
            <hr><br>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

        <label for="Cust">Jenis Lensa</label>
        <input type="text" id="nama_admin" name="nama_admin" placeholder="Photocromic/Ditipiskan/Anti Radiasi" required>

        <label for="Minus">Masukkan Minus</label>
        <input type="number" id="Minus" name="minus" min="1.0" placeholder="Masukkan Minus Anda" required>

        <button type="submit">Submit</button>
    <form>
    <footer>
        <p class="footer-text"> Copyright &copy; 2023 FYSWEARS</p>-

    <script src="./Js/fys.js"></script>
</body>


<script>
    // Fungsi untuk memperbarui tampilan tanggal dan waktu setiap detik
    function updateDateTime() {
        const dateElement = document.getElementById('tanggal-waktu');
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', timeZoneName: 'short', hour: '2-digit', minute: '2-digit', second: '2-digit' };
        const now = new Date();
        const formattedDateTime = now.toLocaleString('id-ID', options);
        dateElement.textContent = formattedDateTime;
    }

    // Memanggil fungsi pertama kali
    updateDateTime();

    // Memperbarui setiap detik
    setInterval(updateDateTime, 1000);
</script>
</html>
