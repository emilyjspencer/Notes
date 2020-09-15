<?php


$films_and_actors = ["The Sixth Sense" => "Bruce Willis",
"Titanic" => "Leonardo DiCaprio",
"Tootsie" => "Dustin Hoffman",
"Barefoot in the Park" => "Robert Redfood"];

echo implode(", ", $films_and_actors);

print_r($films_and_actors);


// Bruce Willis, Leonardo DiCaprio, Dustin Hoffman, Robert RedfoodArray ( [The Sixth Sense] => Bruce Willis [Titanic] => Leonardo DiCaprio [Tootsie] => Dustin Hoffman [Barefoot in the Park] => Robert Redfood )