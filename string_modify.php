<?php

$x = "Hello World!";
echo strtoupper($x);
echo "<br/>";

echo strtolower($x);
echo "<br/>";

echo str_replace("World", "Dolly", $x);
echo "<br/>";

echo strrev($x);
echo "<br/>";

echo trim($x);
echo "<br/>";

echo chop($x);
echo "<br/>";

$y = explode(" ", $x);

//Use print_r() to display the result
print_r($y);
echo "<br/>";

echo str_repeat($x, 2);
echo "<br/>";
echo substr($x, 6, 5);
echo "<br/>";

?>