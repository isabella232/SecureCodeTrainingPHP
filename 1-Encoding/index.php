<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Text Encoder/Decoder</title>
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
      <h1 class="text-center mb-4">Text Encoder/Decoder</h1>
      <form action="encode.php" method="post">
        <div class="form-group">
          <label for="encode">Text to Encode:</label>
          <input type="text" class="form-control" id="encode" name="encode" required>
        </div>
        <button type="submit" class="btn btn-primary">Encode</button>
      </form>
      <br>
      <form action="decode.php" method="post">
        <div class="form-group">
          <label for="decode">Text to Decode:</label>
          <input type="text" class="form-control" id="decode" name="decode" required>
        </div>
        <button type="submit" class="btn btn-primary">Decode</button>
      </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
