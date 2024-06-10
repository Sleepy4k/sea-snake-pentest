<?= $this->extend('errors.minimal') ?>

<?= $this->set('code', '503') ?>

<?= $this->section('content') ?>
  <h2>503 - Service Unavailable</h2>
  <h4><?= $get('message', '') ?></h4>
  <p><?= $get('file', '') ?></p>
<?= $this->stop() ?>