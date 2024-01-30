<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah  Data Pohon</h1>
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
                <td>kode Pohon</td>
                <td><input class="form-control" type="text" name="kode_pohon" size="20" required></td>
              </tr>

              <tr>
                <td>Nama Pohon</td>
                <td><input class="form-control" type="text" name="nama_pohon" size="20" required></td>
              </tr>

              <tr>
                <td>Jenis Pohon</td>
                <td>
                  <select class="form-control" name="jenkel" id="jenkel" required>
                    <option value="">--Pilih Jenis Pohon--</option>
                    <option value="Pohon Rambutan">Pohon Rambutan</option>
                    <option value="Pohon Mangga">Pohon Mangga</option>
                    <option value="Pohon Ketapang">Pohon Ketapang</option>
                  </select>
                </td>
              </tr>
              
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
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