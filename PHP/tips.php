<?php

function calculateTip($total, $tip = 20)
{
  return $total * (1 + $tip/100);
}

echo calculateTip(300, 25);
echo "\n    ";
$without_tip = calculateTip(50);
echo "\n";
echo $without_tip;
echo "\n";