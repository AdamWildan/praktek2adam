<?php

$arrnilai = array('Ani' => 80, 'Otim' => 90, 'Ana' => 75,'Budi' => 8

echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrwarna as $warna) {
  echo "Do you like <font color=$warna>".$warna."</font> ? <br>";
}
reset($arrnilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list($nama, $nilai)=(each($arrnilai))) {
  echo "Nilai $nama =  $nilai<br>";
}

 ?>
