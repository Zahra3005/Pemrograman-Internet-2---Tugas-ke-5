<?php
include 'model.php';
if (isset($_POST['submit_kk'])) {
	$id_mk= $_POST['id_mk'];
	$id_mahasiswa = $_POST['id_mahasiswa']; 
    $kontrak_kuliah = $_POST['kontrak_kuliah']; 
	$model = new Model();
	$model->insert_kk($id_mk ,$id_mahasiswa ,$kontrak_kuliah);
	header('location:kontrak_kuliah.php');
}
if (isset($_POST['submit_edit_kk'])) {
	$id_mk= $_POST['id_mk'];
	$id_mahasiswa = $_POST['id_mahasiswa']; 
    $kontrak_kuliah = $_POST['kontrak_kuliah']; 
	$model = new Model();
	$model->update_kk($id_mk ,$id_mahasiswa ,$kontrak_kuliah);
	header('location:kontrak_kuliah.php');
}
if (isset($_GET['id_mk'])) {
	$id = $_GET['id_mk'];
	$model = new Model();
	$model->delete_kk($id);
	header('location:kontrak_kuliah.php');
}

?>