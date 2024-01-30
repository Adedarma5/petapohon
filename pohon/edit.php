<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_pohon = $_GET['kode_pohon'];
$query = mysqli_query($connection, "SELECT * FROM pohon WHERE kode_pohon='$kode_pohon'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Pohon</h1>
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
              <input type="hidden" name="kode_pohon" value="<?= $row['kode_pohon'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Kode Pohon</td>
                  <td><input class="form-control" type="text" name="kode_pohon" size="20" required value="<?= $row['kode_pohon'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Nama Pohon</td>
                  <td><input class="form-control" type="text" name="nama_pohon" size="20" required value="<?= $row['nama_pohon'] ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Pohon</td>
                  <td>
                    <select class="form-control" name="jenkel" id="jenkel" required>
                      <option value="Pohon Rambutan" <?php if ($row['jenkel'] == "Pohon Rambutan") {
                                              echo "selected";
                                            } ?>>Pohon Rambutan</option>
                      <option value="Pohon Mangga" <?php if ($row['jenkel'] == "Pohon Mangga") {
                                                echo "selected";
                                              } ?>>Pohon Mangga</option>
                      <option value="Pohon Ketapang" <?php if ($row['jenkel'] == "Pohon Ketapang") {
                                                echo "selected";
                                              } ?>>Pohon Ketapang</option>
                    </select>
                  </td>
                </tr>
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