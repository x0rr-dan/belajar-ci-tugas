<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Tambah Diskon</h1>
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <form action="<?= base_url('/diskon/store') ?>" method="post" class="mt-3">

        <?php if (session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger">
            <?= implode('<br>', session()->getFlashdata('errors')) ?>
          </div>
        <?php endif ?>

        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" name="tanggal" class="form-control" value="<?= old('tanggal') ?>">
        </div>

        <div class="mb-3">
          <label for="nominal" class="form-label">Nominal</label>
          <input type="number" name="nominal" class="form-control" value="<?= old('nominal') ?>">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('/diskon') ?>" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
