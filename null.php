<?php

// $a;

// output

// == true
// === true

$a = "";

// output

// == true
// === false

$b = null;

if ($a == $b) {
    echo "== true";
} else {
    echo "== false";
}

echo "<br/>";

if ($a === $b) {
    echo "=== true";
} else {
    echo "=== false";
}
?>