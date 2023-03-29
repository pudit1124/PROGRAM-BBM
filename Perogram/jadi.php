<!DOCTYPE html>
<html>
<head>
	<title>SPBU</title>
</head>
<body>
	<h2>Hasil Perhitungan Pengeluaran</h2>
	<?php
		$jarak_tempuh = $_POST["jarak_tempuh"];
		$berat = $_POST["berat"];
		$total_pengeluaran = $jarak_tempuh / 60 * 15000;
		$bensin_yang_dibutuhkan = $jarak_tempuh /60;
	?>
	<p>Jarak yang di Tempuh: <?php echo $jarak_tempuh; ?> km</p>
	<p>Beban yang di bawa: <?php echo $berat; ?> kg</p>
	<p>Diketahui Harga Bensin 1 liter Rp. 15.000</p>
	<p>Diketahui 1 liter = 60 km</p>
	<p>Total uang yang dikeluarkan: Rp.<?php echo $total_pengeluaran ?></p>
	<p>Bensin yang dibutuhkan untuk menempuh <?php echo $jarak_tempuh ?> km adalah <?php echo $bensin_yang_dibutuhkan ?> liter </p>
</body>
</html>