<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Weak Random Number Generation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      body {
        padding-top: 50px;
      }
      .container {
        max-width: 500px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mb-4">Random Number Generation</h1>
      <div class="card">
        <div class="card-body">
          <?php
          $count = 0;
          $min = 0;
          $max = 100000;
          $random_number = rand($min, $max);
          $match = false;

          do {
              // insecure functions mt_rand(), rand(), uniqid()
              $random = rand($min, $max);
              $count++;
              if ($random == $random_number) {
                  $match = true;
              }
          } while ($match == false);

          echo "Number Repeated after: " . number_format($count);
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
