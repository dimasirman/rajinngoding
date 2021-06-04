<!DOCTYPE html>
<html>
<head>
	<title>daftar pemain pro player MLBB beserta role dan tim nya</title>
	<link rel="stylesheet" href="gaya.css">
</head>
<body>
	<div class="judul">
	<center> <h1>daftar pemain pro player MLBB beserta role dan tim nya</h1></center>
	</div>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="10">
		<tr>
			<th>No</th>
			<th>Nickname</th>
			<th>Team</th>
			<th>Role</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
<head>
<style>
body {
  background-image: url("images/123.jpg");
}

h1 {
  color: red;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>