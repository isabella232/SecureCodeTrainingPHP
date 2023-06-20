<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Encoded Text</title>
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
      <h1 class="text-center mb-4">Encoded Text</h1>
      <div class="card">
        <div class="card-body">
          Encoded Text is: <?php 
            $target = $_POST["encode"];
            $target = base64_encode($target);
            echo $target; 
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
