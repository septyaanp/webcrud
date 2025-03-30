<?php
require_once 'koneksi.php';
require_once 'enkripsi.php';
require_once 'crud.php';

if (isset($_POST['ubah'])) {
 $id = $_POST['id'];
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

 ubah_penerima_beasiswa($id, $data);
 header('Location: index.php');
 exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM tuser WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Penerima Beasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Ubah Data Penerima Beasiswa</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo dekripsi($row['nama']); ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="L" <?php if ($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                    <option value="P" <?php if ($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    value="<?php echo dekripsi($row['tempat_lahir']); ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control"
                    value="<?php echo dekripsi($row['tanggal_lahir']); ?>">
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo dekripsi($row['nim']); ?>">
            </div>
            <div class="form-group">
                <label>IPK</label>
                <input type="text" name="ipk" class="form-control" value="<?php echo $row['ipk']; ?>">
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?php echo $row['jurusan']; ?>">
            </div>
            <div class="form-group">
                <label>Universitas</label>
                <input type="text" name="universitas" class="form-control" value="<?php echo $row['universitas']; ?>">
            </div>
            <div class="form-group">
                <label>Tahun Masuk</label>
                <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $row['tahun_masuk']; ?>">
            </div>
            <div class="form-group">
                <label>No. Rekening</label>
                <input type="text" name="no_rekening" class="form-control"
                    value="<?php echo dekripsi($row['no_rekening']); ?>">
            </div>
            <div class="form-group">
                <label>No. HP</label>
                <input type="text" name="no_hp" class="form-control" value="<?php echo dekripsi($row['no_hp']); ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"><?php echo $row['keterangan']; ?></textarea>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</body>

</html>