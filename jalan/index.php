<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM jalan");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Jalan</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr class="text-center">
                  <th>Kode Jalan</th>
                  <th>Nama Jalan</th>
                  <th>Jenis Jalan</th>
                  <th>Pohon</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $data['kode_jalan'] ?></td>
                    <td><?= $data['nama_jalan'] ?></td>
                    <td><?= $data['jenis_jalan'] ?></td>
                    <td><?= $data['nama_pohon'] ?></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?kode_jalan=<?= $data['kode_jalan'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?kode_jalan=<?= $data['kode_jalan'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>

                <?php
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>