<?php

include 'header.php';

$sisi1 = readline("Masukkan sisi 1: ");
$sisi2 = readline("Masukkan sisi 2: ");

$hasil = sqrt(pow($sisi1, 2) + pow($sisi2, 2));

echo "\n\n== Hasil ==\n";
echo "Sisi miring segitiga adalah: $hasil \n";
