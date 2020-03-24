<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi Bilangan</title>
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <style>
        body{
            margin-top: 10%;
        }
        .card-body button{
            margin-bottom: 10px;
        }
    </style>
</head>
<body onload="konversi();">
    <div class="container">
        <div class="col-sm-6 mx-auto">
            <div class="card text-center">
                <div class="card-header bg-success text-light">
                    <h4>Hasil Konversi Bilangan</h4>
                </div>
                <div class="card-body">
                  <div class="border p-2 text-center bg-dark text-light">
                    <?php
                      // deklarasi data
                      $basisInput = $_POST["basisInput"];
                      $basisOutput = $_POST["basisOutput"];
                      $input = $_POST["input"];
                      // Proses Konversi
                        // Basis Input
                        if($basisInput == 10){
                          $basisData1 = "<b>DECIMAL</b>";
                        } else if($basisInput == 8){
                          $basisData1 = "<b>OCTAL</b>";
                        } else if($basisInput == 2){
                          $basisData1 = "<b>BINER</b>";
                        } else if($basisInput == 16){
                          $basisData1 = "<b>HEXA</b>";
                        }
                        // Basis Output
                        if($basisOutput == 10){
                          $basisData2 = "<b>DECIMAL</b>";
                        } else if($basisOutput == 8){
                          $basisData2 = "<b>OCTAL</b>";
                        } else if($basisOutput == 2){
                          $basisData2 = "<b>BINER</b>";
                        } else if($basisOutput == 16){
                          $basisData2 = "<b>HEXA</b>";
                        }
                          echo "Konversi Dari : <br> $basisData1 ( $input ) ke $basisData2<br>"
                              .strtoupper(base_convert($input,$basisInput,$basisOutput)); // INPUTAN , BASISINPUT , BASISOUTPUT
                     ?>
                  </div>
                  <a href="index.php"><button type="submit" class="btn btn-success col-sm-6 mt-2">Hitung Lagi ?</button></a>
                <div class="card-footer">
                    <p>&copy;2020<br>Gagassurya19</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
