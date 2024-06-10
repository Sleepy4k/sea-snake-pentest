<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= config('bin', 'name') ?> | Exception</title>

    <link rel="apple-touch-icon" href="<?= asset('logo.png') ?>">
    <link rel="shortcut icon" href="<?= asset('logo.png') ?>" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="py-4">
    <div class="container">
      <h1>Exception Error</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Data</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($exception as $key => $data) {
              echo "<tr>";
              echo "<th scope='row'>" . ucfirst($key) . "</th>";
              echo "<td>{$data}</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>