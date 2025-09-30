<?php
function perkenalan($nama, $salam="Assalamu'alaikum") {
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Febriananda","Hallo");

echo "<hr>";

$saya = "Rachmad";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>