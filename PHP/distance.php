<?php


function calculateDistance($point_a, $point_b) {
  $distance = $point_a - $point_b;
  return abs($distance);
}


echo calculateDistance(45, 31);



function calculateTip($total)
{
  return round($total * 1.24);
}


echo calculateDistance(-1, 4); 
echo "\n";
echo calculateDistance(100, 7); 
echo "\n";
echo calculateDistance(203, 33);
echo "\n";
echo calculateTip(100); 
echo "\n";
echo calculateTip(35); 
echo "\n";
echo calculateTip(88.77); 
echo "\n";