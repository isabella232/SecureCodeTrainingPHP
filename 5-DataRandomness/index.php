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
          <p>Generate a Weak Random Number:</p>
          <form action="weak_random.php" method="post">
            <input type="submit" value="Generate!" class="btn btn-primary">
          </form>
          <br>
          <p>Generate a Strong Random Number:</p>
          <form action="strong_random.php" method="post">
            <input type="submit" value="Generate!" class="btn btn-primary">
          </form>
          <br>
          <p>Compare Random Numbers:</p>
          <form action="compare_random.php" method="post">
            <input type="submit" value="Compare!" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
