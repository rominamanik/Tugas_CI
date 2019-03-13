<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
<table class="table">
	<tr>
		<th>NO</th>
		<th>Id Produk</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Gambar</th>
		<th>Deskripsi</th>
		<th>Action</th>
	</tr>
<?php
$no=1;
foreach ($produk as $value) {
	
?>	
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $value->idproduk;?></td>
		<td><?php echo $value->nmprod;?></td>
		<td><?php echo $value->hrg;?></td>
		<td><?php echo $value->stn;?></td>
		<td><?php echo $value->img;?></td>
		<td><?php echo $value->dkrps;?></td>
		<td>

			<a class="btn btn-warning btn-link" href="<?php echo site_url('produk/hapus_produk/').$value->idproduk;?>" onclick="return confirm('Are you sure delete this data?')">Delete</a>
			<a class="btn btn-info btn-link" href="<?php echo site_url('produk/edit_produk/').$value->idproduk;?>">Update</a>

		</td>
	</tr>

<?php } ?>

</tr>
</table>
</body>
</html>
