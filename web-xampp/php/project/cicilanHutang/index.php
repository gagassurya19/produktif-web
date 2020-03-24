<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cicilan Hutang | PHP</title>
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
              <h4>Hitung Cicilan Hutang</h4>
            </div>
            <div class="card-body">
              <form action="proses.php" method="post">
                  <label class="col-sm-4">Nominal</label>
                 <input type="number" name="nominal" id="nominal" class="col-sm-7" required>
                 <label class="col-sm-4 mt-2">Periode</label>
                 <select class="col-sm-7" id="periode" name="periode" required>
                     <option value="12">12</option>
                     <option value="24">24</option>
                     <option value="36">36</option>
                 </select>
                 <label class="col-sm-4">Bunga(%) /tahun</label>
                 <input type="number" name="bunga" id="bunga" class="col-sm-7" required>
                 <button type="submit" class="d-block mx-auto col-sm-6 btn btn-success text-white">Hitung</button>
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
