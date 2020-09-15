<?php

$sentence = ["it", "was", "a"];

array_push($sentence, 'sunny', 'day');
print_r($sentence);
array_pop($sentence);
array_pop($sentence);
array_pop($sentence);
array_pop($sentence);
print_r($sentence);

// Array ( [0] => it [1] => was [2] => a [3] => sunny [4] => day ) Array ( [0] => it )

