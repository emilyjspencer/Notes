<?php


$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

$winners = ["first winner", "second winner", "third winner"];
echo $winners[0];
echo "\n";
echo $winners[1];
echo "\n";
echo $winners[2];
echo "\n";





$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];



$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);