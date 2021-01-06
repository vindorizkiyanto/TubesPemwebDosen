<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/create.css">
<div class="container">
  <div class=row>
    <div class="col-8">

      <h2 class="mt-5">Tambah Keranjang</h2>

      <form action="/keranjang/save" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
          <label for="nama_kopi">Nama Kopi</label>
          <input type="text" class="form-control" id="nama_kopi" name="nama_kopi">
        </div>

        <div class="form-group row">
          <label for="jumlah">Jumlah kopi dipesan</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah">
        </div>

        <div class="form-group row">
          <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="gambar" name="gambar">
            <label class="input-group-text" for="gambar"></label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
</div>


<?= $this->endSection(); ?>