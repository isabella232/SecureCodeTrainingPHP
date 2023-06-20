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

        function encryptText($input, $key)
        {
          $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('DES'));
          $ciphertext = openssl_encrypt($input, 'DES', $key, OPENSSL_RAW_DATA, $iv);
          $encryptedText = base64_encode($iv . $ciphertext);
          return $encryptedText;
        }

        function decryptText($encryptedText, $key)
        {
          $data = base64_decode($encryptedText);
          $iv = substr($data, 0, openssl_cipher_iv_length('DES'));
          $ciphertext = substr($data, openssl_cipher_iv_length('DES'));
          $decryptedText = openssl_decrypt($ciphertext, 'DES', $key, OPENSSL_RAW_DATA, $iv);
          return $decryptedText;
        }


        $input = $_POST['encrypt']; // User input text
        $key = 'mysecretpassword'; // Encryption key

        $encryptedText = encryptText($input, $key);
        echo "Input text: " . $input;
        echo "<br>";
        echo "Encrypted Text: " . $encryptedText;
        echo "<br>";
        $decryptedText = decryptText($encryptedText, $key);
        echo "Decrypted text: " . $decryptedText;
        ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>