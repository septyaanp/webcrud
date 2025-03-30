<?php
require_once 'koneksi.php';
require_once 'enkripsi.php';
require_once 'crud.php';

if (isset($_POST['tambah'])) {
    $data = array(
        'nama' => $_POST['nama'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tempat_lahir' => $_POST['tempat_lahir'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'nim' => $_POST['nim'],
        'ipk' => $_POST['ipk'],
        'jurusan' => $_POST['jurusan'],
        'universitas' => $_POST['universitas'],
        'tahun_masuk' => $_POST['tahun_masuk'],
        'no_rekening' => $_POST['no_rekening'],
        'no_hp' => $_POST['no_hp'],
        'keterangan' => $_POST['keterangan']
    );

    tambah_penerima_beasiswa($data);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Penerima Beasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Tambah Data Penerima Beasiswa</h1>
        <form action="" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control">
            </div>
            <div class="form-group">
                <label>IPK</label>
                <input type="text" name="ipk" class="form-control">
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control">
            </div>
            <div class="form-group">
                <label>Universitas</label>
                <input type="text" name="universitas" class="form-control">
            </div>
            <div class="form-group">
                <label>Tahun Masuk</label>
                <input type="text" name="tahun_masuk" class="form-control">
            </div>
            <div class="form-group">
                <label>No. Rekening</label>
                <input type="text" name="no_rekening" class="form-control">
            </div>
            <div class="form-group">
                <label>No. HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"></textarea>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

</html>