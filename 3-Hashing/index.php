<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Password Hashing</title>
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
      <h1 class="text-center mb-4">Password Hashing</h1>
      <form action="insecure_hashing.php" method="post">
        <div class="form-group">
          <label for="md">Enter password to Hash (insecurely):</label>
          <input type="text" class="form-control" id="md" name="md" required>
        </div>
        <button type="submit" class="btn btn-primary">Hash (Insecure)</button>
      </form>

      <form action="secure_hashing.php" method="post">
        <div class="form-group mt-3">
          <label for="sha">Enter password to Hash (securely):</label>
          <input type="text" class="form-control" id="sha" name="sha" required>
        </div>
        <button type="submit" class="btn btn-primary">Hash (Secure)</button>
      </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
