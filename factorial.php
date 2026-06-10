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

    return $result;
}

// Example usage:
echo json_encode([
    'input' => 5,
    'factorial' => getFactorial(5) // Outputs 120
]);
?>