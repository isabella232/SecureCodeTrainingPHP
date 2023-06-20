<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Weak Password Storage</title>
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
      <h1 class="text-center mb-4">Weak Password Storage</h1>
      <div class="card">
        <div class="card-body">
          <?php
            echo "<p>Weak Storage Methods of Passwords are : ";
            $target = $_POST["md"];
            echo "<br>1. Plain Text: ";
            echo $target;
            $weak_hash = md5($target, false);
            echo "<br>2. Weak Hashing Algorithm (md5): ";
            echo $weak_hash;
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
