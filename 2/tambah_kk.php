<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Kontrak Kuliah</title>
</head>
<br><br><br><br>

<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-2.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Kotrak Kuliah</h1>
	<a class="btn btn btn-warning" href="kontrak_kuliah.php">Kembali</a>
	<br><br>
	<form align="center" action="proses_kk.php" method="post"> <strong>
        <label>Id Mata Kuliah</label>
		<br>
		<input class="form-control" type="number" name="id_mk">
		<label>Id Mahasiswa</label>
		<br>
		<input class="form-control" type="number" name="id_mahasiswa">
        <label>Kontrak Kuliah</label>
		<br>
		<input class="form-control" type="number" name="kontrak_kuliah">
        <br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_kk">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>