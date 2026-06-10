<?php

function getFactorial(int $number): int
{
    if ($number < 0) {
        throw new InvalidArgumentException("Factorial is not defined for negative numbers.");
    }

    $result = 1;
    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }

    return (int) $result;
}

$data = [];

for ($i = 1; $i <= 100; $i++) {
    if (getFactorial($i)) {
        $data[$i] = getFactorial($i);
    }
}

echo json_encode($data, JSON_PRETTY_PRINT);
?>