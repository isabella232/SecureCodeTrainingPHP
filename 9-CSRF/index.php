<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Change Email</title>
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
      <h1 class="text-center mb-4">Change Email</h1>
      <form action="../6-Cross-Site-Scripting/change_email.php" method="POST">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="name">Username:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Change Email</button>
      </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
