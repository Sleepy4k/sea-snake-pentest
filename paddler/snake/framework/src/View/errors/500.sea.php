<?= $this->extend('errors.minimal') ?>

<?= $this->set('code', '500') ?>

<?= $this->section('content') ?>
  <h2>500 - Internal Server Error</h2>
  <h4><?= $get('message', '') ?></h4>
  <p><?= $get('file', '') ?></p>
<?= $this->stop() ?>