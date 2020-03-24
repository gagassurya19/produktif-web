<?php
  // ------ STRING PHP ------
  $kalimat = "haloo gaes moklet";
  echo $kalimat."<br>Huruf : ".strlen($kalimat); //Menghitung jumlah karakter
  echo "<br>Kalimat : ".str_word_count($kalimat); //Menghitung jumlah $kalimat
  echo "<br>Di Reverse : ".strrev($kalimat); //Kalimat/String di REVERSE
  echo "<br>Kalimat yang diganti <b>Halo</b> : ".str_replace("haloo","<b>Ayoo</b>",$kalimat); // Mereplace/Memfilter String

  // ------ FUNCTION ------
  function halo(){
    echo "<br>Haloo";
  }
  halo();

  // ------ Switch Case ------
  $pilih = 0;
  switch ($pilih) {
    case '1':
      echo "<br>OEK $pilih";
      break;

    default:
      echo "<br>Ga ada Angkanya";
      break;
  }

  
 ?>
