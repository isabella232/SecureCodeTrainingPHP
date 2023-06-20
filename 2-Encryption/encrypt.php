<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Text Encryption/Decryption</title>
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
      <h1 class="text-center mb-4">Text Encryption/Decryption</h1>
      <div class="card">
        <div class="card-body">
          <?php
            // Encrypt
            echo "<p>Weakly Encrypted Text is :";
            $target = $_POST["encrypt"];
            $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
            $size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
            $iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
            $mcrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC, $iv);
            echo $mcrypted;
            echo "<br>";

            // Decrypt
            $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC, $iv);
            echo $decrypted;

            echo "<br>";

            echo "Strong Encrypted Text is :";
            // Insert secure code here
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
