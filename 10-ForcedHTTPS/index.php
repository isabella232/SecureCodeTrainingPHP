<!DOCTYPE html>
<html lang="en">

<head>
    <title>Session Security Check</title>
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
        <h1 class="text-center mb-4">Session Security Check</h1>
        <div class="card"><?php
                            session_start();
                            $ishttp = $_SERVER["SERVER_PORT"];
                            if ($ishttp == 443) {
                                echo "I am a secure session!";
                            } else {
                                echo "I am insecure! Fix Me!";
                            }
                            ?> </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>