<?php 
//insert secure headers here
?>
<html>
  <head>
    <title>Content Security Policy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      <form action="../6-Cross-Site-Scripting/change_email.php" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="name">Username</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Change Email</button>
      </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>