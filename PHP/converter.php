# Converter

<?php
  
$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;

echo "\n$riel";
echo "\n$kyat";
echo "\n$krone";
echo "\n$lek";

$exchange_riel = 0.00019;
$exchange_kyat = 0.00059;
$exchange_krone = 0.086;
$exchange_lek = 0.0074;
$fee = 1;

$riel_converted = ($riel * $exchange_riel) + $fee;
echo "\n$riel_converted";
$kyat_converted = ($kyat * $exchange_kyat) + $fee;
echo "\n$kyat_converted";
$krone_converted = ($krone * $exchange_krone) + $fee;
echo "\n$krone_converted";
$lek_converted = ($lek * $exchange_lek) + $fee;
echo "\n$lek_converted";