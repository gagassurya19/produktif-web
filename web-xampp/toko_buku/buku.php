<?php
  session_start();
  if (!isset($_SESSION["id_admin"])) {
    header("location:login_admin.php");
  }

  // mengambil file config.php
  // agar tidak perlu membuat koneksi baru
  include("config.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Barang</title>
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
      Add = () =>{
        document.getElementById('action').value = "insert";
        document.getElementById('kode_buku').value = "";
        document.getElementById('judul').value = "";
        document.getElementById('penulis').value = "";
        document.getElementById('tahun').value = "";
        document.getElementById('harga').value = "";
        document.getElementById('stok').value = "";
        document.getElementById('image').value = "";
      }
      Edit = (item) =>{
        document.getElementById('action').value = "update";
        document.getElementById('kode_buku').value = item.kode_buku;
        document.getElementById('judul').value = item.judul;
        document.getElementById('penulis').value = item.penulis;
        document.getElementById('tahun').value = item.tahun;
        document.getElementById('harga').value = item.harga;
        document.getElementById('stok').value = item.stok;
        document.getElementById('image').value = item.image;
      }
    </script>
  </head>
  <body>
    <!-- Start-Navbar -->
    <?php
      include("navbar_admin.php");
    ?>
    <!-- End-Navbar -->

    <?php
      // Perintah SQL untuk Menampilkan Data buku
      if (isset($_POST["find"])) {
        // Query jika Melakukan Pencarian
        $find = $_POST["find"];
        $sql = "select * from buku
                where kode_buku like '%$find%'
                or judul like '%$find%'
                or penulis like '%$find%'
                or tahun like '%$find%'
                or harga like '%$find%'
                or stok like '%$find%'";
      } else {
        // Query Jika tidak mencari
        $sql = "select * from buku";
      }
      // eksekusi perintah sql
      // $connect -> mengambil dari config.php
      $query = mysqli_query($connect, $sql);
     ?>

    <div class="container">
      <!-- card -->
      <div class="card">
        <div class="card-header bg-success text-light text-center">
          <h4>Input Barang</h4>
        </div>
        <!-- start-body -->
        <div class="card-body">
          <div class="overflow-auto text-center">
          <!-- start-search -->
          <form action="buku.php" method="post">
            <input type="text" name="find" class="form-control mb-2 col-sm-3 float-right" placeholder="Pencarian...">
          </form>
          <!-- end-search -->
          <table class="table border">
            <thead>
              <th>No.</th>
              <th>Kode Buku</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Tahun</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Image</th>
              <th>Option</th>
            </thead>
            <tbody>
              <?php
                $number = 1;
                foreach ($query as $buku): ?>
                <tr>
                  <td>
                    <?php echo $number ?>
                  </td>
                  <td><?php echo $buku["kode_buku"] ?></td>
                  <td><?php echo $buku["judul"] ?></td>
                  <td><?php echo $buku["penulis"] ?></td>
                  <td><?php echo $buku["tahun"] ?></td>
                  <td><?php echo $buku["harga"] ?></td>
                  <td><?php echo $buku["stok"] ?></td>
                  <td><?php echo $buku["image"] ?></td>
                  <td>
                    <button type="button" name="Edit" class="btn btn-sm btn-info"
                            data-toggle="modal" data-target="#modal_buku"
                            onclick='Edit(<?php echo json_encode($buku);?>)'>Edit</button>

                    <a href="process_crud_buku.php?hapus=true&kode_buku=<?php echo $buku["kode_buku"];?>"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                        <button type="button" name="Hapus" class="btn btn-sm btn-danger"
                                data-toggle="modal" data-target="#modal_buku"
                                onclick="Hapus(<?php ?>);">
                          Hapus
                        </button>
                    </a>
                  </td>
                </tr>
              <?php $number++; endforeach; ?>
            </tbody>
          </table>
        </div>
          <button type="button" name="btnTambah" class="btn btn-sm btn-success float-right"
                  data-toggle="modal" data-target="#modal_buku" onclick="Add();">Tambah Data</button>
        </div>
        <!-- end-body -->

        <!-- start-footer -->
        <div class="card-footer text-center">
          <p>&copy;2020 <br> Gagassurya19</p>
        </div>
        <!-- end-footer -->
      </div>
      <!-- end card -->
      <!-- Start Modal -->
      <div class="modal fade" id="modal_buku">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="process_crud_buku.php" method="post" enctype="multipart/form-data">
                <div class="modal-header bg-danger text-light">
                  <h4 class="modal-title">Form Buku</h4>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="action" id="action">
                  Kode Buku
                  <input type="number" name="kode_buku" id="kode_buku" class="form-control" required />
                  Judul
                  <input type="text" name="judul" id="judul" class="form-control" required />
                  Penulis
                  <input type="text" name="penulis" id="penulis" class="form-control" required />
                  Tahun
                  <input type="text" name="tahun" id="tahun" class="form-control" required />
                  Harga
                  <input type="text" name="harga" id="harga" class="form-control" required />
                  Stock
                  <input type="text" name="stok" id="stok" class="form-control" required />
                  Image
                	<input type="file" name="image" id="image">

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="save_buku" class="btn btn-success">Simpan</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modal -->
    </div>
  </body>
</html>
