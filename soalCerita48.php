<?php
$totalSkor = 550; // contoh nilai skor pemain

echo "Total skor pemain adalah: $totalSkor <br>";

// menggunakan ternary operator
$hadiah = ($totalSkor > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
