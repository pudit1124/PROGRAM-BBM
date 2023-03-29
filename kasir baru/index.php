<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>
</head>
<body>
    <h2>Kasir Sederhana</h2>
    <form method="post" action="Proses.php">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" required> <br><br>

        <label for="harga_barang">Harga Barang</label>
        <input type="number" name="harga_barang" min="0" required> <br><br>        
    
        <label for="total_barang">Total Barang</label>
        <input type="number" name="total_barang" min="0" required> <br><br>

        <label for="diskon">Diskon</label>
        <input type="text" name="diskon" min="0" max="100" required> <br><br>


        <input type="submit" name="submit" value="hitung total">
</body>
</html>