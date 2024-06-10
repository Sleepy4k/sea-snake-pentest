<?= $this->extend('errors.minimal') ?>

<?= $this->set('code', '404') ?>

<?= $this->section('content') ?>
  <h2>404 - Not Found</h2>
  <p><?= $get('message', '') ?></p>
<?= $this->stop() ?>