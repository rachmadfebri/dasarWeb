<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Operator Penugasan
$x = 10;
$y = 5;

$hasilTambahTugas = ($x += $y);
$x = 10; // reset
$hasilKurangTugas = ($x -= $y);
$x = 10;
$hasilKaliTugas = ($x *= $y);
$x = 10;
$hasilBagiTugas = ($x /= $y);
$x = 10;
$hasilSisaTugas = ($x %= $y);

echo "a = 10, b = 5 <br>";
echo "Hasil Tambah = {$hasilTambah} <br>";
echo "Hasil Kurang = {$hasilKurang} <br>";
echo "Hasil Kali = {$hasilKali} <br>";
echo "Hasil Bagi = {$hasilBagi} <br>";
echo "Sisa Bagi = {$sisaBagi} <br>";

echo "Hasil Sama = {$hasilSama} <br>";
echo "Hasil Tidak Sama = {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil = {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar = {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama = {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama = {$hasilLebihBesarSama} <br>";

echo "Hasil And = {$hasilAnd} <br>";
echo "Hasil Or = {$hasilOr} <br>";
echo "Hasil Not A = {$hasilNotA} <br>";
echo "Hasil Not B = {$hasilNotB} <br>";

echo "Penugasan += : {$hasilTambahTugas}<br>";
echo "Penugasan -= : {$hasilKurangTugas}<br>";
echo "Penugasan *= : {$hasilKaliTugas}<br>";
echo "Penugasan /= : {$hasilBagiTugas}<br>";
echo "Penugasan %= : {$hasilSisaTugas}<br>";
?>