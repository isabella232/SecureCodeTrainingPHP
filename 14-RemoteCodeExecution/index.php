<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ping IP Address</title>
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
      <h1 class="text-center mb-4">Ping IP Address</h1>
      <div class="card">
        <div class="card-body">
          <form action="code.php" method="get">
            <div class="form-group">
              <label for="ip">Enter IP to ping:</label>
              <input type="text" name="ip" id="ip" class="form-control">
            </div>
            <input type="submit" value="Ping" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
