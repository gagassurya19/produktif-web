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
              <form action="proses.php" method="post">
                Berat (kg)
                <input type="number" name="berat" id="berat" class="form-control">
                Tinggi (cm)
                <input type="number" name="tinggi" id="tinggi" class="form-control">
                <button type="submit" id="button" class="d-block mx-auto col-sm-6 mt-3 btn btn-success">
                    Hitung
                </button>
              </form>
          </div>
            <div class="card-footer text-center">
              <p>&copy;2020 <br> Gagassurya19</p>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
