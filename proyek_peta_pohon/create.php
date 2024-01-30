<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$jalan = mysqli_query($connection, "SELECT kode_jalan,nama_jalan FROM jalan");
$list_tiang = mysqli_query($connection, "SELECT kode_tiang,jenis_tiang FROM list_tiang");
$pohon = mysqli_query($connection, "SELECT kode_pohon,nama_pohon FROM pohon");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Proyek Peta Pohon</h1>
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
                <td>Nama Jalan</td>
                <td>
                  <select class="form-control" name="nama_jalan" id="nama_jalan" required>
                    <option value="">--Pilih Nama Jalan--</option>
                    <?php
                    while ($r = mysqli_fetch_array($jalan)) :
                    ?>
                      <option value="<?= $r['nama_jalan'] ?>"><?= $r['nama_jalan'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Tiang</td>
                <td>
                  <select class="form-control" name="kode_tiang" id="kode_tiang" required>
                    <option value="">--Pilih Proyek--</option>
                    <?php
                    while ($r = mysqli_fetch_array($list_tiang)) :
                    ?>
                      <option value="<?= $r['kode_tiang'] ?>"><?= $r['kode_tiang'] ?></option>
                    <?php
                    endwhile;
                    ?>
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
                <td>Jumlah Pohon</td>
                <td>
                  <select class="form-control" name="jmlh" id="jmlh" required>
                    <option value="">--Pilih Jumalah Pohon--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Tanggal Mulai</td>
                <td><input class="form-control" type="date" name="tanggal_mulai" max="100"></td>
              </tr>
              <tr>
                <td>Tanggal Berakhir</td>
                <td><input class="form-control" type="date" name="tanggal_berakhir" max="100"></td>
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