<!DOCTYPE html>
<html>
<head>
    <title>Display Errors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="display_error.php" method="post">
            <div class="form-group">
                <label for="display-error">Display Error:</label>
                <button type="submit" class="btn btn-primary" id="display-error">Submit</button>
            </div>
        </form>
        <br>
        <form action="hide_error.php" method="post">
            <div class="form-group">
                <label for="hide-error">Hide Error:</label>
                <button type="submit" class="btn btn-primary" id="hide-error">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
