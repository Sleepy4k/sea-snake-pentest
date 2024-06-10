<?= $this->extend('debug.minimal') ?>

<?= $this->section('content') ?>
  <?php
    foreach ($param as $val) {
      ob_start();
      var_dump($val);
      $res = ob_get_contents();
      ob_end_clean();

      echo '<pre>' . $e($res) . '</pre>';
    }
  ?>
<?= $this->stop() ?>