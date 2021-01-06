<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/detail_kopi.css">
<div class="container mt-5">
  <div class="row">
    <div class="col">

      <h2 class="mt-5">Detail Kopi</h2>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="/img/<?= $kopi['gambar']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <h5 class="card-title"><?= $kopi['nama_kopi']; ?></h5>
              <p class="card-text">Asal Daerah : <?= $kopi['asal_kopi'] ?></p>
              <p class="card-text">Jumlah Stok Tersedia : <?= $kopi['jumlah_stok'] ?></p>
              <p class="card-text">Harga Kopi : Rp.<?= $kopi['harga'] ?></p>
              <a href="/kopi">Kembali ke Halaman Kopi</a>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?= $this->endSection(); ?>