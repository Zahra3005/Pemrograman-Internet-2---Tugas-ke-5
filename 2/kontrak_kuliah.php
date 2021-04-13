<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Kontrak Kuliah</title>
</head>
<br><br><br><br>

<body align="center">
	
	<div align="center" class="tabel">
		<h1> Data Kontrak Kuliah</h1>		
		<a href="tambah_kk.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_kk.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr align="center" style="background-color:orange;">
					<th>Id Mata kuliah</th>
					<th>Id Mahasiswa</th>
                    <th>Kontrak kuliah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_kk();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$data->id_mk ?></td>
                            <td><?=$data->id_mahasiswa ?></td>
							<td><?=$data->kontrak_kuliah ?> SKS</td>
							<td>
								<a name="edit_kk" id="edit_kk" class="btn btn-sm btn-warning" 
                href="edit_kk.php?id_mk=<?=$data->id_mk ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" 
                href="proses_kk.php?id_mk=<?=$data->id_mk ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel kontrak Kuliah.</td>
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