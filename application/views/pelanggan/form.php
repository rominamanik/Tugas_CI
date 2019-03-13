<form action="<?php echo site_url("pelanggan/submit"); ?>" method="POST">
    <div class="form-group">
    <label>Nama Pelanggan</label>
    <input type="text" name="nmplg" class="form-control" value="<?php echo(isset($data_pelanggan[0]->nmplg)? $data_pelanggan[0]->nmplg:''); ?>" placeholder="Nama Pelanggan">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="eml" class="form-control" value="<?php echo(isset($data_pelanggan[0]->eml)? $data_pelanggan[0]->eml:''); ?>" placeholder="Email">
    </div>
    <div class="form-group">
    <label>Telepon</label>
    <input type="number" name="tlp" class="form-control" value="<?php echo(isset($data_pelanggan[0]->tlp)? $data_pelanggan[0]->tlp:''); ?>" placeholder="Telepon">
    </div>
    <div class="form-group">
    <label>Alamat</label>
    <textarea name="almt" class="form-control"><?php echo(isset($data_pelanggan[0]->almt)? $data_pelanggan[0]->almt:''); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Proses</button>
</form>