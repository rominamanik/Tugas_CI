<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">안녕하세요</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
  <?php echo anchor("produk","DataProduk",array("class" =>"nav-link" )); ?>
      </li>
           <li class="nav-item ">
<?php echo anchor("pelanggan","Datapelanggan",array("class" =>"nav-link" )); ?>
</li>
<li class="nav-item">
<?php echo anchor("pelanggan/show_list_pelanggan","ListPelanggan",array("class"=>"nav-link")); ?>
    </li>
    <li class="nav-item">
<?php echo anchor("Produk/show_list_produk","ListProduk",array("class"=>"nav-link")); ?>
    </li>
    </ul>
   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>