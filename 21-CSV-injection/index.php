<!DOCTYPE html>
<html>
<head>
    <title>CSV Injection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="textToUpload">Enter text to upload:</label>
                <input type="text" name="textToUpload" id="textToUpload" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Upload</button>
        </form>
    </div>
</body>
</html>
