<?php
  if (isset($_POST["save_buku"])) {
    // issset digunakan untuk mengecek
    // apakah ketika mengakses file ini, dikirimkan
    // data dengan nama "save_buku" dengan method post

    // tampung data yang dikirimkan
    $action = $_POST["action"];
    $kode_buku = $_POST["kode_buku"];
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun = $_POST["tahun"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $image = $_POST["image"];

    // load file config.php
    include("config.php");

    // cek aksinya
    if ($action == "insert") {
      // Sintaks untuk Insert
      $sql = "insert into buku values ('$kode_buku','$judul','$penulis','$tahun','$harga','$stok','$image')";
      // eksekusi perintah sql-nya
      mysqli_query($connect, $sql);
    } else if ($action == "update") {
      // Sintaks untuk update
      $sql = "update buku set
              judul='$judul',
              penulis='$penulis',
              tahun='$tahun',
              harga='$harga',
              stok='$stok',
              image='$image'
              where kode_buku='$kode_buku'";
      // eksekusi perintah sql-nya
      mysqli_query($connect, $sql);
    }

    // redirect ke halaman buku.php
    header("location:buku.php");
  }

  if (isset($_GET["hapus"])) {
    $kode_buku = $_GET["kode_buku"];
    $sql = "delete from buku
            where kode_buku='$kode_buku'";

    include("config.php");
  mysqli_query($connect, $sql);

  // direct ke halaman buku.php
  header("location:buku.php");
  }
 ?>
