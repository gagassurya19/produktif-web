<?php 
    echo "HELLOWORLD! <br>";

    // Variable ($)
    $nama_depan = " qwerty";
    $nama_belakang = "asdfg";
    echo "$nama_depan $nama_belakang";

    // Operator + - * % /
    $angka1 = 90;
    $angka2 = 80;
    $hasil = ($angka1 + $angka2) - ($angka1 - $angka2) * ($angka1 + $angka2);
    echo "<br> Hasilnya adalah :  $hasil";
    echo "<br> Operator Perbandingan : ".($angka1 >= $angka2);

    // Kondisi (IF/ELSE)
    $tahun = 2020;
    if($tahun % 4 == 0){
        echo " <br> Tahun Ini adalah Kabisat";
    }else{
        echo " <br> Bukan Tahun Kabisat";
    }

    // ARRAY --> KURUNG SIKU []
    $buah = ["Mangga","Manggis","Mie Goreng","Dararawet"];
    echo "<br><br> Saya hari ini makan : ";

?>

<!-- Array -->
<ul>
    <?php foreach ($buah as $key => $b): ?>
        <li>
            <?php
                echo $b;
            ?>
        </li>
    <?php endforeach; ?>
</ul>