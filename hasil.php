<?php
    include('connect.php');

    $i = 1;

  $query = mysqli_query($koneksi, 'SELECT * FROM profiles');

if (isset($_GET['del']) && isset($_GET['id']) ) {

    $delete = $_GET['del'] === 'true' ? true : false;
    $id = $_GET['id'];

    if($delete) {
        $result = mysqli_query($koneksi, "DELETE FROM profiles WHERE id=$id");

        if($result) {
            echo "<sript> alert('data berhasil dihapus) </sript>";

            header('location: index.php');
        }
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hasil.css">
    <title>Data Laporan</title>
</head>
<body>
    <h1 class="title">Data Laporan</h1>

    <div class="link">
    <a href="Report.php">Tambah Laporan anda</a>
    <a href="index.php" style="margin-left: 1rem;" >Kembali ke halaman awal</a>
    </div>


     <table  cellpadding="3" cellspacing="0" class="label">
        <tr>
            <th>No</th>

            <th>EDIT / HAPUS</th>

            <th>Nama</th>

            <th>Alamat</th>

            <th>Tanggal laporan</th>

            <th>Judul laporan</th>

            <th>Isi laporan</th>
        </tr>

        <?php while($baris = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $i?></td>

                <td><a href="edit.php?id=<?php echo $baris['id']?>" class="edit">Edit</a>
                    <a href="hasil.php?del=true&id=<?php echo $baris['id']?>" class="del">Hapus</a>
                </td>

                <td><?php echo $baris['nama']?></td>

                <td><?php echo $baris['alamat']?></td>

                <td><?php echo $baris['tanggal']?></td>

                <td><?php echo $baris['judul']?></td>

                <td><?php echo $baris['laporan']?></td>
        </tr>

            <?php $i++; } ?>
     </table>
</body>
</html>