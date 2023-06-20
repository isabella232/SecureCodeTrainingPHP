<!DOCTYPE html>
<html lang="en">
  <head>
    <title>File Uploads</title>
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
      <h1 class="text-center mb-4">File Uploads</h1>
      <div class="card">
        <div class="card-body">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="fileToUpload">Select image to upload:</label>
              <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file">
            </div>
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
