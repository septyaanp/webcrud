<?php
require_once 'koneksi.php';
require_once 'enkripsi.php';
require_once 'crud.php';

$id = $_GET['id'];
hapus_penerima_beasiswa($id);
header('Location: index.php');
exit;
?>
