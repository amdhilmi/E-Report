<?php
    include('connect.php');
    global $koneksi;
    
    if(isset($_GET['btn'])) {
        $id = '';
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
        $tanggal = $_GET['tanggal'];
        $judul = $_GET['judul'];
        $laporan = $_GET['laporan'];

    $query = mysqli_query($koneksi,
     "INSERT INTO profiles(id, nama, alamat, tanggal, judul, laporan) 
    VALUES ('$id', '$nama', '$alamat', '$tanggal', '$judul', '$laporan')"
        );

        if($query) {
            header('location: hasil.php');
        }
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="report.css">
    <link rel="stylesheet" href="style.css">
    <title>Report Page</title>
</head>
<body>

<header>
    <a href="index.php" class="backText"><h1>Back</h1></a>
</header>


    <form action="  " method="get">
   <div class="container">
    <div class="label">
   <div class="nta">
        <h3 class="title">Laporan Pengaduan</h3>
    <label>Nama</label>
        <input type="text" name="nama" class="nama" id="nama" placeholder="Silahkan isi dengan Nama anda">
    <label>Tanggal</label>
        <input type="date" name="tanggal" class="tanggal" id="date" placeholder="Tambahkan tanggal laporan">
        <div>
    <label>Alamat</label>
        <input type="text" name="alamat" class="asal" id="asal" placeholder="Silahkan Isi dengan Alamat anda">
    </div>
</div>
    <div class="judul">
        <input type="text" name="judul" id="jp" placeholder="Judul Pengaduan">
    </div>
    <div>
        <textarea type="text" name="laporan" class="am" id="am"></textarea>
    </div>
        <div class="buttonS">
            <button type="submit" name="btn" href="hasil.php" style="margin-right: 1rem;">Submit</button>
            <a href="hasil.php" class="button2">Lihat hasil Laporan</a>
        </div>
    </div>
</div>
</form>
    
</body>
</html>