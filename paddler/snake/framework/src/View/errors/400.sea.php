<?= $this->extend('errors.minimal') ?>

<?= $this->set('code', '400') ?>

<?= $this->section('content') ?>
  <h2>400 - Bad Request</h2>
  <h4><?= $get('message', '') ?></h4>
  <p><?= $get('file', '') ?></p>
<?= $this->stop() ?>