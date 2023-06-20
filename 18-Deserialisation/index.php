<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deserialisation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="example.php" method="GET">
            <div class="form-group">
                <label for="id">ID to GET:</label>
                <input type="text" name="id" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <form action="vulnerable.php" method="GET">
            <div class="form-group">
                <label for="data">Data to send:</label>
                <input type="text" name="data" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
