<?php
  // Tampung data yang dikirim
  $nisn = $_GET["nisn"];
  $nama = $_GET["nama"];
  $alamat = $_GET["alamat"];

  // Menampilkan data
  echo "<b>Data yang dikirim : </b><br>";
  echo "NISN : $nisn <br>";
  echo "Nama : $nama <br>";
  echo "Alamat : $alamat <br>";
 ?>
