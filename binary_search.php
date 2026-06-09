<?php

function binarySearchIterative(array $arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        // Find the middle index
        $mid = intdiv(($low + $high), 2);

        // Check if target is present at mid
        if ($arr[$mid] == $target) {
            return $mid; // Target found, return index
        }

        // If target is greater, ignore left half
        if ($arr[$mid] < $target) {
            $low = $mid + 1;
        }
        // If target is smaller, ignore right half
        else {
            $high = $mid - 1;
        }
    }

    // Target is not present in the array
    return -1;
}

// --- TEST CASE ---
$testArray = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91, 1];

sort($testArray); // Ensure the array is sorted

$target = 23;

$result = binarySearchIterative($testArray, $target);

if ($result != -1) {
    echo "Element found at index: " . $result;
} else {
    echo "Element not found in array";
}
?>