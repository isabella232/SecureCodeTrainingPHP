<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Safe Null Byte Error</title>
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
      <h1 class="text-center mb-4">Safe Null Byte Error</h1>
      <div class="card">
        <div class="card-body">
          <?php
            $file = $_GET["file"] . ".php";
            //Edit here
          
            echo include("$file");
            echo "I am the SAFE code!";
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
