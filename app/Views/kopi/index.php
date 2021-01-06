<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

</section>
<link rel="stylesheet" type="text/css" href="/css/beli.css">
<h1 style="text-align: center;"><strong>Jual Kopi Online</strong></h1>
<p style="text-align: center;">Temukan biji kopi favoritmu disini!</p>

<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Kopi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($kopi as $kp) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="/img/<?= $kp['gambar']; ?>" alt="" class="gambar"></td>
              <td><?= $kp['nama_kopi']; ?></td>
              <td><a class='btn btn-info btn-xs' href="/kopi/<?= $kp['slug']; ?>"><span class="glyphicon glyphicon-edit"></span> Detail</a>
                <a href="/kopi/create" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Beli</a></td>
            </tr>
          <?php endforeach; ?>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>