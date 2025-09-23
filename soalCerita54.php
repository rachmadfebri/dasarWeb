<?php
// Array dua dimensi: [nama, nilai]
$daftarNilai = [
  ['Alice', 85],
  ['Bob', 92],
  ['Charlie', 78],
  ['David', 64],
  ['Eva', 90],
];

// Hitung total nilai
$totalNilai = 0;
foreach ($daftarNilai as $data) {
  $totalNilai += $data[1];
}

// Hitung rata-rata
$rataRata = $totalNilai / count($daftarNilai);

echo "Rata-rata kelas: $rataRata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

// Cetak siswa yang nilainya di atas rata-rata
foreach ($daftarNilai as $data) {
  if ($data[1] > $rataRata) {
    echo "Nama: {$data[0]}, Nilai: {$data[1]} <br>";
  }
}
?>
