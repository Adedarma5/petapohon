<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah List Tiang</h1>
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
                <td>Kode Tiang</td>
                <td><input class="form-control" type="text" name="kode_tiang"></td>
              </tr>
              <tr>
                <td>Jenis Tiang</td>
                <td>
                  <select class="form-control" name="jenis_tiang" id="jenis_tiang" required>
                    <option value="">--Pilih Jenis Tiang--</option>
                    <option value="Tiang Beton 1">Tiang Beton 1</option>
                    <option value="Tiang Beton 2">Tiang Beton 2</option>
                    <option value="Tiang Beton Gardu">Tiang Beton Gardu</option>
                  </select>
                </td>
              </tr>
              <!-- <tr>
                <td>Tahun</td>
                <td><input class="form-control" type="number" name="tahun"></td>
              </tr> -->
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