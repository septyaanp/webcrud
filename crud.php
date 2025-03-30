<?php
require_once 'koneksi.php';
require_once 'enkripsi.php';

$conn = mysqli_connect($host, $username, $password, $database);

function tambah_penerima_beasiswa($data)
{
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tempat_lahir = enkripsi($data['tempat_lahir']);
    $tanggal_lahir = enkripsi($data['tanggal_lahir']);
    $nim = enkripsi($data['nim']);
    $ipk = $data['ipk'];
    $jurusan = $data['jurusan'];
    $universitas = $data['universitas'];
    $tahun_masuk = $data['tahun_masuk'];
    $no_rekening = enkripsi($data['no_rekening']);
    $no_hp = enkripsi($data['no_hp']);
    $keterangan = $data['keterangan'];

    $query = "INSERT INTO tuser (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, nim, ipk, jurusan, universitas, tahun_masuk, no_rekening, no_hp, keterangan) VALUES ('$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$nim', '$ipk', '$jurusan', '$universitas', '$tahun_masuk', '$no_rekening', '$no_hp', '$keterangan')";
    global $conn;
    mysqli_query($conn, $query);
}
function ubah_penerima_beasiswa($id, $data)
{
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tempat_lahir = enkripsi($data['tempat_lahir']);
    $tanggal_lahir = enkripsi($data['tanggal_lahir']);
    $nim = enkripsi($data['nim']);
    $ipk = $data['ipk'];
    $jurusan = $data['jurusan'];
    $universitas = $data['universitas'];
    $tahun_masuk = $data['tahun_masuk'];
    $no_rekening = enkripsi($data['no_rekening']);
    $no_hp = enkripsi($data['no_hp']);
    $keterangan = $data['keterangan'];

    $query = "UPDATE tuser SET nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nim='$nim', ipk='$ipk', jurusan='$jurusan', universitas='$universitas', tahun_masuk='$tahun_masuk', no_rekening='$no_rekening', no_hp='$no_hp', keterangan='$keterangan' WHERE id='$id'";
    global $conn;
    mysqli_query($conn, $query);
}

function hapus_penerima_beasiswa($id)
{
    $query = "DELETE FROM tuser WHERE id='$id'";
    global $conn;
    mysqli_query($conn, $query);
}

function tampil_penerima_beasiswa()
{
    $query = "SELECT * FROM tuser";
    global $conn;
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
    <tr>
    <td>" . dekripsi($row['nama']) . "</td>
    <td>" . $row['jenis_kelamin'] . "</td>
    <td>" . dekripsi($row['tempat_lahir']) . "</td>
    <td>" . dekripsi($row['tanggal_lahir']) . "</td>
    <td>" . dekripsi($row['nim']) . "</td>
    <td>" . $row['ipk'] . "</td>
    <td>" . $row['jurusan'] . "</td>
    <td>" . $row['universitas'] . "</td>
    <td>" . $row['tahun_masuk'] . "</td>
    <td>" . dekripsi($row['no_rekening']) . "</td>
    <td>" . dekripsi($row['no_hp']) . "</td>
    <td>" . $row['keterangan'] . "</td>
    <td>
    <a href='ubah.php?id=" . $row['id'] . "'>Ubah</a> |
    <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a>
    </td>
    </tr>
    ";
    }
}
?>