<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM proyek_peta_pohon WHERE id='$id'");
$jalan = mysqli_query($connection, "SELECT kode_jalan,nama_jalan FROM jalan");
$list_tiang = mysqli_query($connection, "SELECT kode_tiang,jenis_tiang FROM list_tiang");
$pohon = mysqli_query($connection, "SELECT kode_pohon,nama_pohon FROM pohon");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Nama jalan</td>
                  <td>
                    <select class="form-control" name="nama_jalan" id="nama_jalan" required>
                      <?php
                      while ($r = mysqli_fetch_array($jalan)) :
                      ?>
                        <option value="<?= $r['nama_jalan'] ?>" <?php if ($row['nama_jalan'] == $r['nama_jalan']) {
                                                              echo "selected";
                                                            } ?>><?= $r['nama_jalan'] ?></option>
                      <?php
                      endwhile;
                      ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Nomor Tiang</td>
                  <td>
                    <select class="form-control" name="list_tiang" id="list_tiang" required>
                      <?php
                      while ($r = mysqli_fetch_array($list_tiang)) :
                      ?>
                        <option value="<?= $r['kode_tiang'] ?>" <?php if ($row['kode_tiang'] == $r['kode_tiang']) {
                                                                      echo "selected";
                                                                    } ?>><?= $r['kode_tiang'] ?></option>
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
                      <?php
                       while ($r = mysqli_fetch_array($pohon)) :
                       ?>
                         <option value="<?= $r['nama_pohon'] ?>" <?php if ($row['nama_pohon'] == $r['nama_pohon']) {
                                                                        echo "selected";
                                                                     } ?>><?= $r['nama_pohon'] ?></option>
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
                      <option value="1" <?php if ($row['jmlh'] == "1") {
                                              echo "selected";
                                            } ?>>1</option>
                      <option value="2" <?php if ($row['jmlh'] == "2") {
                                                echo "selected";
                                              } ?>>2</option>
                      <option value="3" <?php if ($row['jmlh'] == "3") {
                                                echo "selected";
                                              } ?>>3</option>
                      <option value="4" <?php if ($row['jmlh'] == "4") {
                                                echo "selected";
                                              } ?>>4</option>
                      <option value="5" <?php if ($row['jmlh'] == "5") {
                                                echo "selected";
                                              } ?>>5</option>
                      <option value="6" <?php if ($row['jmlh'] == "6") {
                                                echo "selected";
                                              } ?>>6</option>
                      <option value="7" <?php if ($row['jmlh'] == "7") {
                                                echo "selected";
                                              } ?>>7</option>
                      <option value="8" <?php if ($row['jmlh'] == "8") {
                                                echo "selected";
                                              } ?>>8</option>
                      <option value="9" <?php if ($row['jmlh'] == "9") {
                                                echo "selected";
                                              } ?>>9</option>
                      <option value="10" <?php if ($row['jmlh'] == "10") {
                                                echo "selected";
                                              } ?>>10</option>
                    </select>
                  </td>
                </tr>
                <tr>
                <td>Tanggal Mulai</td>
                <td><input class="form-control" type="date" name="tanggal_mulai" max="100" value="<?= $row['tanggal_mulai'] ?>"></td>
              </tr>
              <tr>
                <td>Tanggal Berakhir</td>
                <td><input class="form-control" type="date" name="tanggal_berakhir" max="100" value="<?= $row['tanggal_berakhir'] ?>"></td>
              </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  </td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>