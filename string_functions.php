<?php
$a = "Hello world!";
echo $a;
echo "<br/>";
echo "Length of the string is: " . strlen($a);
echo "<br/>";
echo "Number of words in the string is: " . str_word_count($a);
echo "<br/>";

$txt = "I really love PHP!";
var_dump(str_contains($txt, "love"));

echo "<br/>";

echo strpos($txt, "love");
echo "<br/>";

var_dump(str_starts_with($txt, "I really"));
echo "<br/>";
var_dump(str_ends_with($txt, "PHP!"));
echo "<br/>";
var_dump(str_ends_with($txt, "php!"));
echo "<br/>";

?>