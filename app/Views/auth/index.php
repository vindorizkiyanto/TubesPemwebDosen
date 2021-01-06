<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" type="text/css" href="/css/index.css">

<div class="text-container text-center">
    <h1 class="display-3">KOPINANG</h1>
    <h1 class="lead">Kopi Khas Lampung</h1>
    <p class="lead">Tebuat Dari Biji Kopi Pilihan Yang Dianggap Seperti Anak Sendiri</p>
    <a href="<?= site_url('/kopi') ?>" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Beli Sekarang</a>
</div>
</section>

<?= $this->endSection(); ?>