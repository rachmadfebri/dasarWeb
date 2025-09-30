<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h2>Array Terindeks</h2>
    <?php
      $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

      // for
      for ($i = 0; $i < count($Listdosen); $i++) {
        echo $Listdosen[$i] . "<br>";
      }

      echo "<br>";

      // foreach
      foreach ($Listdosen as $dosen) {
        echo $dosen . "<br>";
      }
    ?>
  </body>
</html>