<?php

echo "1. Standard Pyramid (Nested Loops)";
echo "<br/>";

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // 1. Print leading spaces
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // 2. Print stars (2 * $i - 1 ensures an odd number of stars per row)
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    // 3. Move to the next line
    echo "<br/>";

}


echo "2. The Clean Way (Using str_repeat)";
echo "<br/>";

for ($i = 1; $i <= $rows; $i++) {
    $spaces = str_repeat("&nbsp;&nbsp;", $rows - $i);
    $stars = str_repeat("*", (2 * $i) - 1);

    echo $spaces . $stars;
    echo "<br/>";
}

echo "3. Left-Aligned Half Pyramid";
echo "<br/>";

for ($i = 1; $i <= $rows; $i++) {
    echo str_repeat("*", $i);
    echo "<br/>";
}
?>