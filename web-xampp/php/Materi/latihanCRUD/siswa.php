<?php
  // mengambil file config.php
  // agar tidak perlu membuat koneksi baru
  include("config.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Data Siswa</title>
     <!-- css-bootstrap -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!-- js-bootstrap -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/popper.js"></script>
     <script src="assets/js/bootstrap.js"></script>
     <script type="text/javascript">
       Add = () =>{
         document.getElementById('action').value = "insert";
         document.getElementById('nisn').value = "";
         document.getElementById('nama').value = "";
         document.getElementById('kelas').value = "";
         document.getElementById('jenis_kelamin').value = "";
       }
       Edit = (item) =>{
         document.getElementById('action').value = "update";
         document.getElementById('nisn').value = item.nisn;
         document.getElementById('nama').value = item.nama;
         document.getElementById('kelas').value = item.kelas;
         document.getElementById('jenis_kelamin').value = item.jenis_kelamin;
       }

      // Function ini dijalankan ketika Halaman ini dibuka pada browser
      $(function(){
        setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
      });

      //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
      function timestamp() {
        $.ajax({
          url: 'ajax_timestamp.php',
          success: function(data) {
            $('#timestamp').html(data);
          },
        });
      }
     </script>
     <style media="screen">
       span.judul{
          margin-top: 1.33em;
          margin-bottom: 1.33em;
          margin-left: 0;
          margin-right: 0;
          font-weight: bold;
          font-size: 170%;
       }
     </style>
   </head>
   <body>
     <?php
     // membuat perintah sql untuk
     // menampilkan data siswa
       if (isset($_POST["cari"])) {
         // query jika Pencarian
         $cari = $_POST["cari"];
         $sql = "select * from siswa
                where nisn like '%$cari%'
                or nama like '%$cari%'
                or kelas like '%$cari%'
                or jenis_kelamin like '%$cari%'";
       } else {
         // query jika tidak mencari
         $sql = "select * from siswa";
       }
      // eksekusi perintah sql
      // $Koneksi -> mengambil dari config.php
      $query = mysqli_query($koneksi, $sql);
      ?>

      <div class="container">
        <div class="col-sm-8 mx-auto my-2">
          <!-- Start card -->
          <div class="card text-center">
            <div class="card-header bg-success text-light text-center">
              <span class="judul">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Siswa</span>
              <span><div id="timestamp" class="float-right"></div></span>
            </div>
            <div class="card-body">
              <form action="siswa.php" method="post">
                <input type="text" name="cari" class="form-control mb-2 col-sm-3 float-right" placeholder="Pencarian...">
              </form>
              <table class="table border">
                <thead>
                  <th>No.</th>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Option</th>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    foreach ($query as $siswa): ?>
                    <tr>
                      <td>
                        <?php echo $no ?>
                      </td>
                      <td><?php echo $siswa["nisn"] ?></td>
                      <td><?php echo $siswa["nama"] ?></td>
                      <td><?php echo $siswa["kelas"] ?></td>
                      <td><?php echo $siswa["jenis_kelamin"] ?></td>
                      <td>
                        <button type="button" name="Edit" class="btn btn-sm btn-info"
                                data-toggle="modal" data-target="#modal_siswa"
                                onclick='Edit(<?php echo json_encode($siswa);?>)'>Edit</button>

                        <a href="proses_crud_siswa.php?hapus=true&nisn=<?php echo $siswa["nisn"];?>"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                            <button type="button" name="Hapus" class="btn btn-sm btn-danger"
                                    data-toggle="modal" data-target="#modal_siswa"
                                    onclick="Hapus(<?php ?>);">
                              Hapus
                            </button>
                        </a>
                      </td>
                    </tr>
                  <?php $no++; endforeach; ?>
                </tbody>
              </table>
              <button type="button" name="btnTambah" class="btn btn-sm btn-success float-right"
                      data-toggle="modal" data-target="#modal_siswa" onclick="Add();">Tambah Data</button>
            </div>
            <div class="card-footer text-center">
                <p>&copy;2020 <br> Gagassurya19</p>
            </div>
          </div>
          <!-- End card -->
          <!-- Start Modal -->
          <div class="modal fade" id="modal_siswa">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <form action="proses_crud_siswa.php" method="post">
                    <div class="modal-header bg-danger text-light">
                      <h4 class="modal-title">Form Siswa</h4>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="action" id="action">
                      NISN
                      <input type="number" name="nisn" id="nisn" class="form-control" required />
                      Nama
                      <input type="text" name="nama" id="nama" class="form-control" required />
                      Kelas
                      <input type="text" name="kelas" id="kelas" class="form-control" required />
                      Jenis Kelamins
                      <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" name="save_siswa" class="btn btn-success">Simpan</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Modal -->
        </div>
      </div>
    </div>
   </body>
 </html>
