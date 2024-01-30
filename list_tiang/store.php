<?php
session_start();
require_once '../helper/connection.php';

$kode_tiang = $_POST['kode_tiang'];
$jenis_tiang = $_POST['jenis_tiang'];

$query = mysqli_query($connection, "insert into list_tiang (kode_tiang, jenis_tiang) value ('$kode_tiang', '$jenis_tiang')");

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
