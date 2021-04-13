<?php
include 'model.php';
if (isset($_POST['submit_mk'])) {
	$id_mk= $_POST['id_mk'];
	$nama_mk = $_POST['nama_mk']; 
	$model = new Model();
	$model->insert_mk($id_mk ,$nama_mk);
	header('location:mk.php');
}
if (isset($_POST['submit_edit_mk'])) {
	$id_mk= $_POST['id_mk'];
	$nama_mk = $_POST['nama_mk']; 
	$model = new Model();
	$model->update_mk($id_mk ,$nama_mk);
	header('location:mk.php');
}
if (isset($_GET['id_mk'])) {
	$id = $_GET['id_mk'];
	$model = new Model();
	$model->delete_mk($id);
	header('location:mk.php');
}

?>