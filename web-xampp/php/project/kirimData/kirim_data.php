<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kirim Data | PHP</title>
  </head>
  <body>
    <form action="process.php" method="get">
        <table>
          <tr>
            <td>NISN</td>
            <td>
              <input type="number" name="nisn" required>
            </td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>
              <input type="text" name="nama" required>
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>
              <input type="text" name="alamat" required>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
            <button type="submit" name="button">Kirim Data</button>
            </td>
          </tr>
        </table>
    </form>
  </body>
</html>
