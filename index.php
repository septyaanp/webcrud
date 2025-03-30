<?php
require_once 'koneksi.php';
require_once 'enkripsi.php';
require_once 'crud.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Penerima Beasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Data Penerima Beasiswa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>NIM</th>
                    <th>IPK</th>
                    <th>Jurusan</th>
                    <th>Universitas</th>
                    <th>Tahun Masuk</th>
                    <th>No. Rekening</th>
                    <th>No. HP</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php tampil_penerima_beasiswa(); ?>
            </tbody>
        </table>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>
</body>

</html>