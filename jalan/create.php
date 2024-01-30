<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$jalan = mysqli_query($connection, "SELECT * FROM jalan");
$pohon = mysqli_query($connection, "SELECT kode_pohon,nama_pohon FROM pohon");

?>


<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah  Data Jalan</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>kode Jalan</td>
                <td><input class="form-control" type="text" name="kode_jalan"></td>
              </tr>
              <tr>
                <td>Nama Jalan</td>
                <td><input class="form-control" type="text" name="nama_jalan"></td>
              </tr>
              <tr>
                <td>Jenis Jalan</td>
                <td>
                  <select class="form-control" name="jenis_jalan" id="jenis_jalan" required>
                    <option value="">--Pilih Jenis Jalan--</option>
                    <option value="Jalan Linsum">Jalan Linsum</option>
                    <option value="Jalan Desa">Jalan Desa</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Pohon</td>
                <td>
                  <select class="form-control" name="nama_pohon" id="nama_pohon" required>
                    <option value="">--Pilih Pohon--</option>
                    <?php
                    while ($r = mysqli_fetch_array($pohon)) :
                    ?>
                      <option value="<?= $r['nama_pohon'] ?>"><?= $r['nama_pohon'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>