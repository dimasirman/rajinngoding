<!DOCTYPE html>
<html>
<head>
<style>
th{
    color: #f5983b;
    font-weight: bold;
    text-align: center;
	width: 1%;
}

h1{
    height: 50px;
    width: 100%;
    background-color: rgba(191, 204, 70, 0.6);
}
td{
    height: 65px;
    width: 1%;
    background-color: black;
	color: white;
}
body{
    margin:0;
    background-image: url("images/singa.jpg");
    background-size:100%;
}
center{
    font-weight:bold;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: medium;
    color:#f54316;
}
</style>
</head>
<head>
	<title>Database Kumpulan Tugas</title>
</head>
<body>
	<div class="judul">
	<center> <h1>KUMPULAN TUGAS (Update Perminggu)</h1></center>
	</div>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>MATA KULIAH</th>
			<th>KETERANGAN TUGAS</th>
			<th>FORMAT PENAMAAN</th>
			<th>KETERANGAN</th>
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