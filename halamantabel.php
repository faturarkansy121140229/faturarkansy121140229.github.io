<!DOCTYPE html>
<html lang="en">
  <!--Fatur Arkan Syawalva-->
  <!--121140229-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Tabel</title>
  <link rel="stylesheet" href="halamantabelphp.css">
</head>
<body>
<div class="header">
  <img src="itera.png" width="150" height="150" allign="left" alt="foto gojo">
    <br><br>
    <h3 class="indent"> Halaman Tabel</h3>
    <h4 class="indent"> Fatur Arkan Syawalva, 121140229</h4>
    <br>
</div>

<div class="topnav">
  <a href="Halaman Tabel.html" style="float:right"><b>Halaman Tabel</b></a>
  <a href="Halaman Utama.html" style="float:right"><b>Halaman Utama</b></a>
</div><br>

<div class="container">
        <h1>Detail Informasi Pendaftar</h1>
        <div class="info-box">
          <?php 
         $nama = $_GET['nama'];
         $nim = $_GET['nim'];
         $prodi = $_GET['prodi'];
         $email = $_GET['email'];
         $alamat = $_GET['alamat'];

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Prodi:</strong> $prodi</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
          ?>
        </div>
    </div>
</body>
</html>