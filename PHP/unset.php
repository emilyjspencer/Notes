<?php

$names = ["Molly" => 1, "Billy"=> 2];

echo implode(", ", $names);

unset($names["Molly"]);

echo implode(", ", $names);
echo "\n"; 
print_r($names);

// 1, 22Array ( [Billy] => 2 )