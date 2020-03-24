<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hasil nya</title>
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
            <h4>Hasil Cicilan Hutang</h4>
          </div>
          <div class="card-body">
            <div class="border p-2 text-center bg-dark text-light">
            <?php
              // Mengambil data
              $nominal = $_POST["nominal"];
              $periode = $_POST["periode"];
              $bunga = $_POST["bunga"];

              // kalkulasi
              $cicilan = ($nominal / $periode) + ($nominal / 100 * $bunga); // Cicilan + Jumlah bunga

              // output
              echo "Jumlah Cicilan anda : <br>".$cicilan;
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
