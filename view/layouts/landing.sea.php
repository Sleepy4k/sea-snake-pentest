<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->put('partials.head.meta') ?>

    <?= $this->put('partials.head.title') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('css/landing.css') ?>">
  </head>
  <body>
    <img class="background" src="<?= asset('images/kuliah.jpg') ?>" alt="Kuliah" />

    <?= $this->get('content') ?>
  </body>
</html>
