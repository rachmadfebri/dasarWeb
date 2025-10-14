<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validasi Nama
    if (empty($nama)) {
        echo "<p style='color:red'>Nama tidak boleh kosong!</p>";
    }
    // Validasi Email
    elseif (empty($email)) {
        echo "<p style='color:red'>Email tidak boleh kosong!</p>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red'>Format email tidak valid!</p>";
    }
    // 🔹 Validasi Password minimal 8 karakter (server-side)
    elseif (strlen($password) < 8) {
        echo "<p style='color:red'>Password minimal 8 karakter!</p>";
    }
    // Jika semua valid
    else {
        echo "<p style='color:green'>Form berhasil dikirim!<br>
        Nama: $nama<br>
        Email: $email<br>
        Password: (disembunyikan demi keamanan)</p>";
    }
} else {
    echo "<p style='color:red'>Akses tidak valid!</p>";
}
?>
