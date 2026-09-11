<?php
$arr = [1, 2, 2, 3, 4, 4, 5, 6, 6];

// Method 1: Using built-in function (Fastest)
$unique = array_unique($arr);

// Method 2: Manual Logic (To show interviewer you understand loops)
$manualUnique = [];
foreach ($arr as $val) {
    if (!in_array($val, $manualUnique)) {
        $manualUnique[] = $val;
    }
}

print_r($manualUnique);
?>