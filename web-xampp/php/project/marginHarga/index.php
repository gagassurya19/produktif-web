<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hitung Margin Harga | HTML CSS JS PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body>
      <div class="container">
          <div class="col-sm-6 mx-auto mt-5">
            <div class="card">
              <div class="card-header bg-success text-light">
                <h4>Margin Harga</h4>
              </div>
              <div class="card-body">
                <form action="hasil.php" method="post">
                  Harga Awal
                  <input type="number" name="hargaAwal" placeholder="Masukkan Harga ..." class="form-control" value="20000">
                  Margin Harga (laba)
                  <input type="number" name="marginHarga" placeholder="Masukkan Laba ... " class="form-control" value="1">
                  <button type="submit" name="button" class="btn btn-success form-control mt-4">Submit</button>
                </form>
              </div>
            </div>
          </div>
      </div>
  </body>
</html>
