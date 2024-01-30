<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama_jalan = $_POST['nama_jalan'];
$kode_tiang = $_POST['kode_tiang'];
$nama_pohon = $_POST['nama_pohon'];
$jmlh_pohon= $_POST['jmlh'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_berakhir = $_POST['tanggal_berakhir'];

$query = mysqli_query($connection, "UPDATE proyek_peta_pohon SET nama_jalan='$nama_jalan', kode_tiang = '$kode_tiang', nama_pohon = '$nama_pohon', jmlh = '$jmlh_pohon', tanggal_mulai = '$tanggal_mulai', tanggal_berakhir = '$tanggal_berakhir' WHERE id='$id'");

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
