<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
<table border="1px">
	<tr>
		<th>NO</th>
		<th>Id Produk</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Gambar</th>
		<th>Deskripsi</th>
	</tr>
	<tr>
	</tr>
<?php
$no=1;
foreach ($p as $value) {
	
?>	
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $value->idproduk;?></td>
		<td><?php echo $value->nmprod;?></td>
		<td><?php echo $value->hrg;?></td>
		<td><?php echo $value->stn;?></td>
		<td><?php echo $value->img;?></td>
		<td><?php echo $value->dkrps;?></td>


	</td>
<?php } ?>
	</tr>
</table>
</body>
</html>
