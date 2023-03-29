<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $nama_barang = $_POST['nama_barang'];
            $harga_barang = $_POST['harga_barang'];
            $total_barang = $_POST['total_barang'];
            $diskon = $_POST['diskon'];

            $total_harga = $harga_barang * $total_barang;
            $jumlah_diskon = ($total_harga * $diskon) / 100;
            $total_bayar = $total_harga - $jumlah_diskon;

            echo "<h2>Hasil Perhitungan</h2>";
            echo "<br>";
            echo "Nama Barang: ". $nama_barang. "<br>";
            echo "Harga Barang: ". $harga_barang. "<br>";
            echo "Total Barang: ". $total_barang. "<br>";
            echo "Diskon: ". $diskon. "<br>";
            echo "Total Harga : ". $total_harga . "<br>";
            echo "Total Diskon: ". $jumlah_diskon. "<br>";
            echo "Total Bayar: ". $total_bayar. "<br>";
        }
    ?>  
</body>
</html>