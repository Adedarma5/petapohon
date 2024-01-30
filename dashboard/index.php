<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$jalan = mysqli_query($connection, "SELECT COUNT(*) FROM jalan");
$pohon = mysqli_query($connection, "SELECT COUNT(*) FROM pohon");
$list_tiang = mysqli_query($connection, "SELECT COUNT(*) FROM list_tiang");
$proyek_peta_pohon = mysqli_query($connection, "SELECT COUNT(*) FROM proyek_peta_pohon");

$total_jalan = mysqli_fetch_array($jalan)[0];
$total_pohon = mysqli_fetch_array($pohon)[0];
$total_list_tiang = mysqli_fetch_array($list_tiang)[0];
$total_proyek_peta_pohon = mysqli_fetch_array($proyek_peta_pohon)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Jalan</h4>
          </div>
          <div class="card-body">
            <?= $total_jalan ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Pohon</h4>
          </div>
          <div class="card-body">
            <?= $total_pohon ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Tiang</h4>
          </div>
          <div class="card-body">
            <?= $total_list_tiang ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="far fa-newspaper"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Proyek Peta Pohon</h4>
          </div>
          <div class="card-body">
            <?= $total_proyek_peta_pohon?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
