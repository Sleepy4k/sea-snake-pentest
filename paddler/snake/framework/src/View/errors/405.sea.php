<?= $this->extend('errors.minimal') ?>

<?= $this->set('code', '405') ?>

<?= $this->section('content') ?>
  <h2>405 - Method Not Allowed</h2>
  <p><?= $get('message', '') ?></p>
<?= $this->stop() ?>