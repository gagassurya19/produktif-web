<?php
  if (isset($_POST["save_siswa"])) {
    // issset digunakan untuk mengecek
    // apakah ketika mengakses file ini, dikirimkan
    // data dengan nama "save_siswa" dengan method post

    // tampung data yang dikirimkan
    $action = $_POST["action"];
    $nisn = $_POST["nisn"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    // load file config.php
    include("config.php");

    // cek aksinya
    if ($action == "insert") {
      // Sintaks untuk Insert
      $sql = "insert into siswa values ('$nisn','$nama','$kelas','$jenis_kelamin')";
      // eksekusi perintah sql-nya
      mysqli_query($koneksi,$sql);
    } else if ($action == "update") {
      // Sintaks untuk update
      $sql = "update siswa set
              nama='$nama',
              kelas='$kelas',
              jenis_kelamin='$jenis_kelamin'
              where nisn='$nisn'";
      // eksekusi perintah sql-nya
      mysqli_query($koneksi,$sql);
    }

    // redirect ke halaman siswa.php
    header("location:siswa.php");
  }

  if (isset($_GET["hapus"])) {
    $nisn = $_GET["nisn"];
    $sql = "delete from siswa
            where nisn='$nisn'";

    include("config.php");
  mysqli_query($koneksi, $sql);

  // direct ke halaman siswa.php
  header("location:siswa.php");
  }
 ?>
