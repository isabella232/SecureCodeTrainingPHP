<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Random Number Generation</title>
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
          $min = 0;
          $max = 100000;

          // variables for weak algorithm
          $random_numbers_weak = array();
          $match_found_weak = false;
          $count_weak = 0;

          // weak random number generation
          // keep looping till random number is repeated
          while ($match_found_weak == false) {
              $random = rand($min, $max);
              // check if newly generated number already exists in $random_numbers_weak array
              if (in_array($random, $random_numbers_weak)) {
                  $match_found_weak = true;
              } else {
                  $count_weak++;
                  array_push($random_numbers_weak, $random);
              }
          }

          echo "Weak algorithm repeated a number after " . number_format($count_weak) . " iterations.";

          echo "<br/>";

          // variables for strong algorithm
          $random_numbers_strong = array();
          $match_found_strong = false;
          $count_strong = 0;

          // strong random number generation
          // keep looping till random number is repeated
          while ($match_found_strong == false) {
              $random = random_int($min, $max);
              // check if newly generated number already exists in $random_numbers_strong array
              if (in_array($random, $random_numbers_strong)) {
                  $match_found_strong = true;
              } else {
                  $count_strong++;
                  array_push($random_numbers_strong, $random);
              }
          }

          echo "Strong algorithm repeated a number after " . number_format($count_strong) . " iterations.";

          echo "<br />";
          echo "Note that due to the small sample size, there is a good chance the weak algorithm may take longer before it generates a repeat number.";
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
