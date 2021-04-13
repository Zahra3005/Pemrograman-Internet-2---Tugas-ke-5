<?php
include 'header.html';
$id = $_GET['id_mk'];
include 'model.php';
$model = new Model();
$data = $model->edit_kk($id);
?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Kontrak Kuliah</title>
</head>
<br><br><br><br>

<body>
	
	<div class="container">
  	<div class="row">
	  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-1.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Edit Kontrak Kuliah</h1>
	<br><br>
	<form form align="center" action="proses_kk.php" method="post"> <strong>
                <label>Id Mata Kuliah</label>
                <br>
                <input class="form-control" type="number" name="id_mk" value="<?php echo $data->id_mk ?>">
                <br>
                <label>Id Mahasiswa</label>
                <br>
                <input class="form-control" type="number" name="id_mahasiswa" value="<?php echo $data->id_mahasiswa ?>">
                <br>
                <label>Kotrak Kuliah</label>
                <br>
                <input class="form-control" type="text" name="kontrak_kuliah" value="<?php echo $data->kontrak_kuliah ?>">
                <br><br>
                <a class="btn btn btn-warning"  href="kontrak_kuliah.php">Kembali</a> <button class="btn btn btn-info" type="submit" name="submit_edit_kk">Submit</button> 
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
<?=include 'footer.html';?>
</html>