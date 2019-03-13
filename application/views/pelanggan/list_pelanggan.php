<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
<table class="table">
	<tr>
		<th>No</th>
		<th>Id Pelanggan</th>
		<th>Nama Pelanggan</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th>Action</th>
	</tr>
<?php
$no=1;
foreach ($pelanggan as $value) {
	
?>	
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $value->idpelanggan;?></td>
		<td><?php echo $value->nmplg;?></td>
		<td><?php echo $value->tlp;?></td>
		<td><?php echo $value->eml;?></td>
		<td><?php echo $value->almt;?></td>
		<td>
			<a class="btn btn-warning btn-link" href="<?php echo site_url('pelanggan/hapus_pelanggan/').$value->idpelanggan;?>" onclick="return confirm('Are you sure delete this data?')">Delete</a>
			<a class="btn btn-info btn-link" href="<?php echo site_url('pelanggan/edit_pelanggan/').$value->idpelanggan;?>">Update</a>

		</td>
	</tr>

<?php } ?>

</tr>
</table>
</body>
</html>
