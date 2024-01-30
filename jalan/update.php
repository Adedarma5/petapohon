<?php
session_start();
require_once '../helper/connection.php';

$kode_jalan = $_POST['kode_jalan'];
$nama_jalan = $_POST['nama_jalan'];
$jenkel = $_POST['jenis_jalan'];
$nama_pohon = $_POST['nama_pohon'];

$query = mysqli_query($connection, "UPDATE jalan SET nama_jalan = '$nama_jalan', jenis_jalan = '$jenkel', nama_pohon = '$nama_pohon', WHERE kode_jalan = '$kode_jalan'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
