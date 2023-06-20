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
                            /*
// if the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    echo $_SERVER["HTTP_HOST"];
    echo $_SERVER["REQUEST_URI"];
    console.log("TEST");
    // tell the browser to redirect to the HTTPS URL.
 //   header("Location: http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    // prevent the rest of the script from executing.
    exit;
}
*/
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