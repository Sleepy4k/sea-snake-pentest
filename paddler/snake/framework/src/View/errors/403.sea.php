<?= $this->extend('errors.minimal') ?>

<?= $this->set('code', '403') ?>

<?= $this->section('content') ?>
  <h2>403 - Forbidden</h2>
  <h4><?= $get('message', '') ?></h4>
  <p><?= $get('file', '') ?></p>
<?= $this->stop() ?>