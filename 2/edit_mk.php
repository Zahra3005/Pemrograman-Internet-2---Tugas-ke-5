<?php
include 'header.html';
$id = $_GET['id_mk'];
include 'model.php';
$model = new Model();
$data = $model->edit_mk($id);
?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Mata Kuliah</title>
</head>
<br><br><br><br>

<body>
	
	<div class="container">
  	<div class="row">
	  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-1.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Edit Mata Kuliah</h1>
	<br><br>
	<form form align="center" action="proses_mk.php" method="post"> <strong>
                <label>Id Mata Kuliah</label>
                <br>
                <input class="form-control" type="number" name="id_mk" value="<?php echo $data->id_mk ?>">
                <br>
                <label>Nama Mata Kuliah</label>
                <br>
                <input class="form-control" type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>">
                <br><br>
                <a class="btn btn btn-warning"  href="mk.php">Kembali</a> <button class="btn btn btn-info" type="submit" name="submit_edit_mk">Submit</button> 
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