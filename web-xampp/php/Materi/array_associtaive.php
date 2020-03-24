<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative | PHP</title>
</head>
<body>
    <?php 
        // Tipe ARRAY :
        // 1. Array Numeric : Indeks Angka;
        // 2. Array Associative : Indeks String;

        $siswa = [
            [
                "Nisn" => "1001",
                "Nama" => "qwrefds",
                "Alamat" => "sdgadsg"
            ],
            [
                "Nisn" => "1002",
                "Nama" => "qwrgsd",
                "Alamat" => "Tulungagung"
            ],
            [
                "Nisn" => "1003",
                "Nama" => "qwrgnageagesd",
                "Alamat" => "Tulungagung, ngantru"
            ]
            ];
    ?>

    <h3>Data Siswa</h3>
    <table border="1" cellpadding="2">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $s): ?>
                <tr>
                    <td><?php echo $s["Nisn"]; ?></td>
                    <td><?php echo $s["Nama"]; ?></td>
                    <td><?php echo $s["Alamat"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>