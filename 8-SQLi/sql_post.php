<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Details</title>
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
      <h1 class="text-center mb-4">User Details</h1>
      <div class="card">
        <div class="card-body">
          <?php
            // Include config file
            require_once "../config.php";
          
            if (isset($_POST["id"])) {
              $user_id = $_POST["id"];
              $sql = $link->query("SELECT * FROM users WHERE id = " . $user_id);
          
              if ($sql->num_rows > 0) {
                // Output data of each row
                while ($row = $sql->fetch_assoc()) {
                  echo "ID: <span class='font-weight-bold'>" . $row["id"] . "</span> - Name: <span class='font-weight-bold'>" . $row["firstname"] . "</span> - Lastname: <span class='font-weight-bold'>" . $row["surname"] . "</span><br>";
                }
              } else {
                echo "0 results";
              }
            } else {
              echo "Invalid user ID.";
            }
          
            // Close connections
            $link->close();
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
