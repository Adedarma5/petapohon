<?php
session_start();
require_once '../helper/connection.php';

$kode_jalan = $_POST['kode_jalan'];
$nama_jalan = $_POST['nama_jalan'];
$jenkel = $_POST['jenis_jalan'];
$nama_pohon = $_POST['nama_pohon'];

$query = mysqli_query($connection, "insert into jalan(kode_jalan, nama_jalan, jenis_jalan, nama_pohon) value('$kode_jalan', '$nama_jalan', '$jenkel', '$nama_pohon')");
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
