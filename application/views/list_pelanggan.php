<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
<table border="1px">
	<tr>
		<th>NO</th>
		<th>Id </th>
		<th>Nama Pelanggan</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Alamat</th>
	</tr>
	<tr>
	</tr>
<?php
$no=1;
foreach ($pelanggan as $value) {
	
?>	
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $value->idpelanggan;?></td>
		<td><?php echo $value->eml;?></td>
		<td><?php echo $value->tlp;?></td>
		<td><?php echo $value->almt;?></td>
	</td>
<?php } ?>
	</tr>
</table>
</body>
</html>
