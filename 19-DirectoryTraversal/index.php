<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="unsafe.php" method="get">
            <div class="form-group">
                <label for="file">Enter filename:</label>
                <input type="text" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="File Include">Submit</button>
        </form>
        <p>Files: home, gallery, blog, catalog</p>
    </div>
</body>
</html>
