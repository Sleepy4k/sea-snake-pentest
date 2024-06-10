<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= config('bin', 'name') ?> | Dump</title>

    <link rel="apple-touch-icon" href="<?= asset('logo.png') ?>">
    <link rel="shortcut icon" href="<?= asset('logo.png') ?>" type="image/x-icon">

    <style>
      pre {
        overflow: auto;
        margin: 2rem 1rem;
        font-size: 0.9rem;
        padding-left: 0.7rem;
      }
    </style>
  </head>
  <body>
    <?= $this->get('content') ?>
  </body>
</html>