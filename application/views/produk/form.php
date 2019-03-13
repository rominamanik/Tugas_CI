<form action="<?php echo site_url("produk/submit"); ?>" method="POST">
    <div class="form-group row">
      <label>Nama Produk</label>
      <input type="text" class="form-control" name="nmprod" placeholder="Ketik nama produk" size="20">
    </div>
    <div class="form-group row">
      <label>Harga</label>
      <input type="text" class="form-control" name="hrg" placeholder="Ketik harga" size="10">
    </div>
    <div class="form-group row">
      <label>Satuan</label>
      <input type="text" class="form-control" name="stn" placeholder="Ketik satuan">
    </div>
    <div class="form-group row">
      <label>Image</label>
      <input type="file" class="form-control-file" name="img" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Masukkan gambar produk</small>
    </div>
    <div class="form-group row"> 
        <label>Deskripsi</label>
        <textarea class="form-control" name="dkrps" rows="3"></textarea>
    </div>
    <div class="form-group row">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>