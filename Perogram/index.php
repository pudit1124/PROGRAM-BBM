
<!DOCTYPE html>
<html>
<head>
	<title>Program Menghitung Konsumsi Bahan Bakar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<center><h3>Program Menghitung Konsumsi Bahan Bakar</h3></center>
	<form action="jadi.php" method="post" class="row g-3">

    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="col-md-12">
    <label for="waktu_tempuh" class="form-label">Jarak Tempuh (km/jam): </label>
    <input type="number" class="form-control" name="jarak_tempuh" id="waktu_tempuh">
  </div>
  <div class="col-12">
    <label for="berat" class="form-label">Berat beban yang dibawa(kg): </label>
    <input type="number" class="form-control" name ="berat" id="berat" >
  </div>
  <br>
  <div class="col-12">
    <label class="form-label">Diketahui:</label>
      <br>
    -Harga Bensin 1 liter Rp. 15.000
      <br>
    -1 liter = 60 km
  </div>
 <br><br>
  <div class="col-12">
    <button type="submit" class="btn btn-success">HITUNG</button>
  </div>
    </div>
    <div class="col-md-4"></div>
  
</form>
</body>
</html>