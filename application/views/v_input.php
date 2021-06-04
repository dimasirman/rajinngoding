<!DOCTYPE html>
<html>
<head>
	<title>Database Kumpulan Tugas</title>
</head>
<body>
	<center>
		<h1>KUMPULAN TUGAS (UPDATE PERMINGGU)</h1>
		<h3>Tambah data</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>MATA KULIAH</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>KETERANGAN TUGAS</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>FORMAT PENAMAAN</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>