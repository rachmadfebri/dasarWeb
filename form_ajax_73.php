<!DOCTYPE html>
<html>
  <head>
    <title>Validasi Form dengan AJAX dan Password</title>
    <script src="jquery-3.7.1.js"></script>
    <script>
      $(document).ready(function () {
        $("#formValidasi").submit(function (event) {
          event.preventDefault();

          var nama = $("input[name='nama']").val().trim();
          var email = $("input[name='email']").val().trim();
          var password = $("input[name='password']").val();

          // 🔹 Validasi password minimal 8 karakter (client-side)
          if (password.length < 8) {
            $("#hasil").html("<p style='color:red'>Password minimal 8 karakter!</p>");
            return; // stop kirim ke server
          }

          // Jika semua valid, kirim ke PHP via AJAX
          var formData = $(this).serialize();

          $.ajax({
            type: "POST",
            url: "proses_validasi_ajax.php",
            data: formData,
            success: function (response) {
              $("#hasil").html(response);
            },
            error: function () {
              $("#hasil").html("<p style='color:red'>Terjadi kesalahan koneksi!</p>");
            },
          });
        });
      });
    </script>
  </head>
  <body>
    <h2>Form Validasi dengan Password</h2>
    <form id="formValidasi" method="post">
      <label>Nama:</label><br />
      <input type="text" name="nama" /><br /><br />

      <label>Email:</label><br />
      <input type="text" name="email" /><br /><br />

      <label>Password:</label><br />
      <input type="password" name="password" /><br /><br />

      <input type="submit" value="Kirim" />
    </form>
    <hr />
    <div id="hasil"></div>
  </body>
</html>
