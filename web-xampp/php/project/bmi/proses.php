<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BMI | PHP</title>
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body>
      <div class="container">
        <div class="col-sm-6 mx-auto my-5">
          <div class="card">
            <div class="card-header bg-success text-light">
              <h4>Body Mass Index</h4>
            </div>
            <div class="card-body">
              <div class="border p-2 text-center bg-dark text-light">
                <?php
                  // mengambil data
                  $berat = $_POST["berat"];
                  $tinggi = $_POST["tinggi"];

                  // kalkulasi
                  $tinggi /= 100; // Untuk mengkonversi CM -> M
                  $hasil = $berat / ($tinggi*$tinggi);

                  if($hasil <= 18.5){
                    echo "Nilai BMI : ".$hasil."<br>Anda Kurus";
                  } else if($hasil >= 18.5 && $hasil <= 22.9){
                    echo "Nilai BMI : ".$hasil."<br>Anda Normal";
                  } else if($hasil >= 23 && $hasil <= 24.9){
                    echo "Nilai BMI : ".$hasil."<br>Anda Obesitas";
                  } else{
                    echo "Nilai BMI : ".$hasil."<br>Anda Tidak Normal";
                  }
                 ?>
              </div>
          </div>
            <div class="card-footer text-center">
              <p>&copy;2020 <br> Gagassurya19</p>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
