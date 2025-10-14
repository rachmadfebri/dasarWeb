<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>HTML Injection - Aman</title>
</head>
<body>
  <h2>Contoh Form (dilengkapi proteksi)</h2>

  <!-- Form yang mengirimkan field 'input' via POST -->
  <form action="" method="post">
    <label>Masukkan teks: <input type="text" name="input" /></label>
    <input type="submit" value="Kirim" />
  </form>
  <br>
  <form action="" method="post">
    <label>Masukkan email: <input type="email" name="input" required /></label>
    <input type="submit" value="Kirim" />
  </form>
  
  <?php
  $safe_output = '';

  if (isset($_POST['input'])) {
      $input_raw = $_POST['input'];
      $safe_output = htmlspecialchars($input_raw, ENT_QUOTES, 'UTF-8');
  }
  ?>
  <?php if ($safe_output !== ''): ?>
    <div class="output">
      <strong>Input yang aman:</strong>
      <pre><?php echo $safe_output; ?></pre>
    </div>
  <?php else: ?>
    <p class="output">Belum ada input. Silakan isi form di atas lalu klik <em>Kirim</em>.</p>
  <?php endif; ?>

  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    $email = $_POST['input'];
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email yang valid: " . htmlspecialchars($email);
      } else {
      echo "Email tidak valid. Masukkan format email yang benar.";
      }
  }
  
  ?>
  <?php if ($safe_output !== ''): ?>
    <div class="output">
      <strong>Input yang aman:</strong>
      <pre><?php echo $safe_output; ?></pre>
    </div>
  <?php else: ?>
    <p class="output">Belum ada input. Silakan isi form di atas lalu klik <em>Kirim</em>.</p>
  <?php endif; ?>
</body>
</html>