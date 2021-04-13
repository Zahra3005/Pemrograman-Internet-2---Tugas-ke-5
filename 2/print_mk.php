<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, 
		td {
			padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Mata Kuliah</h1>
	<table>
		<thead>
			<tr>
                    <th>No.</th>
					<th>ID Mata Kuliah</th>
					<th>Nama Mata kuliah</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_mk();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
						<td><?=$data->id_mk ?></td>
						<td><?=$data->nama_mk ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel Mata kuliah.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>