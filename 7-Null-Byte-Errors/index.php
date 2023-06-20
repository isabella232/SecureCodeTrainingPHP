<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Null Byte Error</title>
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
      <h1 class="text-center mb-4">Null Byte Error</h1>
      <div class="card">
        <div class="card-body">
          <form action="unsafe.php" method="get">
            <div class="form-group">
              <label for="unsafeFile">Enter filename:</label>
              <input type="text" name="file" id="unsafeFile" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Unsafe Code!</button>
          </form>
          <br>
          <form action="safe.php" method="get">
            <div class="form-group">
              <label for="safeFile">Enter filename:</label>
              <input type="text" name="file" id="safeFile" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Safe Code!</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
