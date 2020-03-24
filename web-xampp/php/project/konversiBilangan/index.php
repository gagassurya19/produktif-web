<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Bilangan</title>
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
    onkeyup = (event) =>{
          let element = document.getElementById('pesan');
          let basisInput = Number(document.getElementById('basisInput').value);

          if(basisInput == 10){ // DESIMAL
              if(event.keyCode >= 48 && event.keyCode <= 57){
                  element.className = "";
                  element.innerText = "";
              } else{
                  element.className = "";
                  element.classList.add("alert");
                  element.classList.add("alert-danger");
                  element.innerText = "Bilangan harus ANGKA!";
              }
          } else if(basisInput == 2){ // BINER
              if(event.keyCode != 48 && event.keyCode != 49){
                  element.className = "";
                  element.classList.add("alert");
                  element.classList.add("alert-danger");
                  element.innerText = "Bilangan harus 0 dan 1";
              } else{
                  element.className = "";
                  element.innerText = "";
              }
          } else if(basisInput == 8){ // OKTAL
              if(event.keyCode >= 48 && event.keyCode <= 55){
                  element.className = "";
                  element.innerText = "";
              } else{
                  element.className = "";
                  element.classList.add("alert");
                  element.classList.add("alert-danger");
                  element.innerText = "Bilangan harus diantara 0 dan 7";
              }
          } else if(basisInput == 16){ // HEXA
              if(event.keyCode >= 48 && event.keyCode <= 55
                  || event.keyCode >= 65 && event.keyCode <= 70
                  || event.keyCode >= 97 && event.keyCode <= 102){
                      element.className = "";
                      element.innerText = "";
              } else{
                  element.className = "";
                  element.classList.add("alert");
                  element.classList.add("alert-danger");
                  element.innerText = "Bilangan harus diantara 0 dan 9 // A dan E";
              }
          }
      }
    </script>
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
  <form action="hasil.php" method="post">
    <div class="container">
        <div class="col-sm-6 mx-auto">
            <div class="card text-center">
                <div class="card-header bg-success text-light">
                    <h4>Konversi Bilangan</h4>
                </div>
                <div class="card-body">
                    <!-- alert -->
                    <div id="pesan" name="pesan" role="alert"></div>
                    <!-- alert -->

                    Input Bilangan
                    <!-- Menu DropDown -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="basisInput">Bilangan : </label>
                        </div>
                        <select class="custom-select" name="basisInput" id="basisInput" onkeyup="key(event);">
                        <option selected>Choose...</option>
                        <option value="10">Desimal</option>
                        <option value="8">Oktal</option>
                        <option value="2">Biner</option>
                        <option value="16">hexa</option>
                        </select>
                    </div>
                    <!-- Menu DropDown -->
                    <input type="text" name="input" id="input" class="form-control mb-2 text-center" onkeyup="key(event);">

                    <!-- Menu DropDown -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="basisOutput">Konversi Ke : </label>
                        </div>
                        <select class="custom-select" name="basisOutput" id="basisOutput">
                          <option selected>Choose...</option>
                          <option value="10">Desimal</option>
                          <option value="8">Oktal</option>
                          <option value="2">Biner</option>
                          <option value="16">hexa</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-success col-sm-6">Convert</button>
                    <!-- Menu DropDown -->
                </div>
                <div class="card-footer">
                    <p>&copy;2020<br>Gagassurya19</p>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
