<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SQL Injection Demo</title>
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
      <h1 class="text-center mb-4">SQL Injection Demo</h1>
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">POST Form</h5>
          <form action="sql_post.php" method="post">
            <div class="form-group">
              <label for="post-id">ID:</label>
              <input type="text" class="form-control" id="post-id" name="id" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">GET Form</h5>
          <form action="sql_get.php" method="get">
            <div class="form-group">
              <label for="get-id">ID:</label>
              <input type="text" class="form-control" id="get-id" name="id" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <div class="mt-4">
        <h5>Payload</h5>
        <p><strong>ID:</strong> 1 OR 1=1</p>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
