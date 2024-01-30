<?php
session_start();
require_once '../helper/connection.php';

$nama_jalan = $_POST['nama_jalan'];
$kode_tiang = $_POST['kode_tiang'];
$nama_pohon = $_POST['nama_pohon'];
$jmlh_pohon = $_POST['jmlh'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_berakhir = $_POST['tanggal_berakhir'];

$query = mysqli_query($connection, "insert into proyek_peta_pohon (nama_jalan, kode_tiang, nama_pohon, jmlh, tanggal_mulai, tanggal_berakhir) value('$nama_jalan', '$kode_tiang', '$nama_pohon', '$jmlh_pohon', '$tanggal_mulai', '$tanggal_berakhir')");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
