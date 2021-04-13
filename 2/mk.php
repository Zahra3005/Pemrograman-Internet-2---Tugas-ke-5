<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Mata Kuliah</title>
</head>
<br><br><br><br>
<body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Mata Kuliah</h1>		
		<a href="tambah_mk.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_mk.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table  align="center" width="800px" border="1">
			<thead>
				<tr align="center" style="background-color:pink;">
					<th>Id Mata kuliah</th>
					<th>Nama Mata kuliah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_mk();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$data->id_mk ?></td>
							<td><?=$data->nama_mk ?></td>
							<td>
								<a name="edit_mk" id="edit_mk" class="btn btn-sm btn-warning" 
                href="edit_mk.php?id_mk=<?=$data->id_mk ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" 
                href="proses_mk.php?id_mk=<?=$data->id_mk ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel mata kuliah.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>