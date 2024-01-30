<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_tiang = $_GET['kode_tiang'];
$query = mysqli_query($connection, "SELECT * FROM list_tiang WHERE kode_tiang='$kode_tiang'");
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
              <input type="hidden" name="kode_tiang" value="<?= $row['kode_tiang'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Kode Tiang</td>
                  <td><input class="form-control" required value="<?= $row['kode_tiang'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Jenis Tiang</td>
                  <td>
                    <select class="form-control" name="jenis_tiang" id="jenis_tiang" required>
                      <option value="Tiang Beton 1" <?php if ($row['jenis_tiang'] == "Tiang Beton 1") {
                                              echo "selected";
                                            } ?>>Tiang Beton 1</option>
                      <option value="Tiang Beton 2" <?php if ($row['jenis_tiang'] == "Tiang Beton 2") {
                                                echo "selected";
                                              } ?>>Tiang Beton 2</option>
                      <option value="Tiang Beton Gardu" <?php if ($row['jenis_tiang'] == "Tiang Beton Gardu") {
                                                echo "selected";
                                              } ?>>Tiang Beton Gardu</option>
                    </select>
                  </td>
                </tr>
                <!-- <tr>
                  <td>Tahun</td>
                  <td><input class="form-control" type="number" name="tahun" required value="<?= $row['tahun'] ?>"></td>
                </tr> -->
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
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