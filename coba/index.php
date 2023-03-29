<!DOCTYPE html>
<html>
<head>
	<title>Hitung Waktu Tempuh, Konsumsi Bensin, dan Biaya Bensin</title>
</head>
<body>
	<h1>Hitung Waktu Tempuh, Konsumsi Bensin, dan Biaya Bensin</h1>

	<form method="post">
		<label for="jarak">Jarak Tempuh (km):</label>
		<input type="number" name="jarak" id="jarak" required><br><br>

		<label for="kecepatan">Kecepatan Rata-Rata (km/jam):</label>
		<input type="number" name="kecepatan" id="kecepatan" required><br><br>

		<label for="konsumsi">Konsumsi Bensin (km/liter):</label>
		<input type="number" name="konsumsi" id="konsumsi" required><br><br>

		<label for="harga">Harga Bensin (/liter):</label>
		<input type="number" name="harga" id="harga" required><br><br>

		<label for="beban">Beban yang Dibawa (kg):</label>
		<input type="number" name="beban" id="beban" required><br><br>

		<input type="submit" value="Hitung">
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$jarak = $_POST['jarak'];
			$kecepatan = $_POST['kecepatan'];
			$konsumsi = $_POST['konsumsi'];
			$harga = $_POST['harga'];
			$beban = $_POST['beban'];

			$waktu_tempuh = $jarak / $kecepatan;
			$bensin = ($jarak / $konsumsi) + ($beban / 100);
			$biaya_bensin = $bensin * $harga;

			echo "<h2>Hasil Perhitungan:</h2>";
			echo "<p>Waktu Tempuh: " . round($waktu_tempuh, 2) . " jam</p>";
			echo "<p>Konsumsi Bensin: " . round($bensin, 2) . " liter</p>";
			echo "<p>Biaya Bensin: Rp " . number_format($biaya_bensin, 2, ',', '.') . "</p>";
		}
	?>
</body>
</html>
