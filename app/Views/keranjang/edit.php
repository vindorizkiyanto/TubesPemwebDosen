<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class=row>
    <div class="col-8">

      <h2 class="mt-5">Update Keranjang</h2>

      <form action="/keranjang/update/<?= $keranjang['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $keranjang['slug']; ?>">
        <div class="form-group row">
          <label for="nama_kopi">Nama Kopi</label>
          <input type="text" class="form-control" id="nama_kopi" name="nama_kopi" value="<?= $keranjang['nama_kopi']; ?>">
        </div>

        <div class="form-group row">
          <label for="jumlah">Jumlah kopi dipesan</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $keranjang['jumlah']; ?>">
        </div>

        <div class="form-group row">
          <label for="gambar">Gambar Kopi</label>
          <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $keranjang['gambar']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>

    </div>
  </div>
</div>


<?= $this->endSection(); ?>