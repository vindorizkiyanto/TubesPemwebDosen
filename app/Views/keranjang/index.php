<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" type="text/css" href="/css/style.css">

<div class="container">
<div class="row">
<div class="col">

<h1 class="mt-5">List Keranjang</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php foreach ($keranjang as $krj) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $krj['gambar']; ?>" alt="" class="gambar"></td>
      <td><?= $krj['nama_kopi']; ?></td>
      <td><?= $krj['jumlah']; ?></td>
      <td><a href="/keranjang/edit/<?= $krj['slug']; ?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span> Edit</a> 
      <a href="/keranjang/delete/<?= $krj['id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
    </tr>
    <?php endforeach; ?>

</div></div>
</div>

<?= $this->endSection(); ?>


