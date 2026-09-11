<?php
function findSecondLargest($arr)
{
    $largest = $secondLargest = null;

    foreach ($arr as $num) {
        if ($largest === null || $num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num < $largest && ($secondLargest === null || $num > $secondLargest)) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}

$numbers = [10, 20, 4, 45, 99, 99, 45];
echo "Second Largest: " . findSecondLargest($numbers);
// Output: 45
?>