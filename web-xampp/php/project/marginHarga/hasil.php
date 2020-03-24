
<?php
  // ambil data
  $hargaAwal = $_POST["hargaAwal"];
  $marginHarga = $_POST["marginHarga"];

  //kalkulasi
  $hasil = $hargaAwal + ($marginHarga + $hargaAwal);

  echo "Total Harga : $hasil";

  //If/else
  if ($hasil >= 10000 && $hasil <= 15000) {
    $print = "<br>Dapet Diskon 10%";
    $diskon = ($hasil * 10) / 100;
    $hasilDiskonan = $hasil - $diskon;
    echo "<br>Hasil setelah diskon : ".$hasilDiskonan;
  } else if($hasil >= 15000 && $hasil <= 30000){
    $print = "<br>Dapet Diskon 20%";
    $diskon = ($hasil * 20) / 100;
    $hasilDiskonan = $hasil - $diskon;
    echo "<br>Hasil setelah diskon : ".$hasilDiskonan;
  } else if($hasil >= 30000){
    echo "<br>Dapet Diskon 30%";
    $diskon = ($hasil * 30) / 100;
    $hasilDiskonan = $hasil - $diskon;
    echo "<br>Hasil setelah diskon : ".$hasilDiskonan;
  } else{
    echo "<br>Maaf Kamu tidak dapat diskon.";
  }

 ?>
