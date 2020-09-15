<?php


$car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($car);


unset($car["oil"]);
$car["oil"] = "new and premium";

unset($car["tires"]);
$car["tires"] = "new with deep treads";

unset($car["filth"]);

print_r($car);

/*
(
    [oil] => black and clumpy
    [brakes] => new
    [tires] => old with worn treads
    [filth] => bird droppings
    [wiper fluid] => full
    [headlights] => bright
)
Array
(
    [brakes] => new
    [wiper fluid] => full
    [headlights] => bright
    [oil] => new and premium
    [tires] => new with deep treads
)
*/