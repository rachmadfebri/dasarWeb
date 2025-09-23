<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dari kecil ke besar
sort($nilai);

// Buang 2 nilai terendah dan 2 nilai tertinggi manual
$totalNilai = 0;
$jumlahData = 0;

for ($i = 2; $i < count($nilai) - 2; $i++) {
  $totalNilai += $nilai[$i];
  $jumlahData++;
}

// Hitung rata-rata
$rataRata = $totalNilai / $jumlahData;

// Tampilkan hasil
echo "Daftar nilai: ";
foreach ($nilai as $n) {
  echo $n . " ";
}
echo "<br>";

echo "Total nilai (tanpa 2 tertinggi & 2 terendah) = $totalNilai <br>";
echo "Rata-rata = $rataRata <br>";
?>
