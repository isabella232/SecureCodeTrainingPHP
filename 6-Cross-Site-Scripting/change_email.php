<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cross Site Scripting - Welcome</title>
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
      <h1 class="text-center mb-4">Cross Site Scripting</h1>
      <div class="card">
        <div class="card-body">
          Welcome <span class="font-weight-bold"><?php echo $_POST["name"]; ?></span><br>
          Your NEW email address is: <span class="font-weight-bold"><?php echo $_POST["email"]; ?></span>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
