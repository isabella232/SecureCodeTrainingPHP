<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Text Encryption</title>
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
      <h1 class="text-center mb-4">Text Encryption</h1>
      <form action="encrypt.php" method="post">
        <div class="form-group">
          <label for="encrypt">Text to Encrypt:</label>
          <input type="text" class="form-control" id="encrypt" name="encrypt" required>
        </div>
        <button type="submit" class="btn btn-primary">Encrypt</button>
      </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
