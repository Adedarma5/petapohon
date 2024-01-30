<?php
session_start();
require_once '../helper/connection.php';

$kode_pohon = $_POST['kode_pohon'];
$nama_pohon = $_POST['nama_pohon'];
$jenkel = $_POST['jenkel'];

$query = mysqli_query($connection, "insert into pohon(kode_pohon, nama_pohon, jenkel) value('$kode_pohon', '$nama_pohon', '$jenkel')");
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
