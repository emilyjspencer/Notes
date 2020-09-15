<?php

$people = [];

array_unshift($people, "Peter", "Bob", "Daniel", "Thomas", "Henry");

array_shift($people);

array_unshift($people, "Tobin", "Michael");

array_shift($people);

array_unshift($people, "Tobin");
print_r($people);

// Array ( [0] => Tobin [1] => Michael [2] => Bob [3] => Daniel [4] => Thomas [5] => Henry )