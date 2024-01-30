<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_jalan = $_GET['kode_jalan'];
$query = mysqli_query($connection, "SELECT * FROM jalan WHERE kode_jalan='$kode_jalan'");
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
              <input type="hidden" name="kode_jalan" value="<?= $row['kode_jalan'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>NIM</td>
                  <td><input class="form-control" required value="<?= $row['nim'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Nama Mahasiswa</td>
                  <td><input class="form-control" type="text" name="nama" required value="<?= $row['nama'] ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <select class="form-control" name="jenkel" id="jenkel" required>
                      <option value="Jalan Linsum" <?php if ($row['jenis_jalan'] == "Jalan Linsum") {
                                              echo "selected";
                                            } ?>>Jalan Linsum</option>
                      <option value="Jalan Desa" <?php if ($row['jenis_jalan'] == "Jalan Desa") {
                                                echo "selected";
                                              } ?>>Jalan Desa</option>
                    </select>
                  </td>
                </tr>
                <tr>
                <td>Pohon</td>
                <td>
                  <select class="form-control" name="kode_pohon" id="kode_pohon" required>
                    <option value="">--Pilih Pohon--</option>
                    <?php
                    while ($r = mysqli_fetch_array($pohon)) :
                    ?>
                      <option value="<?= $r['kode_pohon'] ?>"><?= $r['nama_pohon'] ?></option>
                    <?php
                    endwhile;
                    ?>
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