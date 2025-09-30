<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      table {
        border-collapse: collapse;
        width: 300px;
        margin-top: 10px;
      }
      th, td {
        border: 1px solid #333;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <?php
      $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
      ];
    ?>

    <h2>Data Dosen</h2>
    <table>
      <tr>
        <th>Field</th>
        <th>Data</th>
      </tr>
      <tr>
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
      </tr>
      <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
      </tr>
    </table>
  </body>
</html>