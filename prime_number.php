<?php

function isPrime(int $number): bool
{
    // 1 and below are not prime
    if ($number <= 1) {
        return false;
    }
    // 2 is the only even prime
    if ($number === 2) {
        return true;
    }
    // Exclude all other even numbers
    if ($number % 2 === 0) {
        return false;
    }

    // Check only odd factors up to the square root
    $squareRoot = sqrt($number);
    for ($i = 3; $i <= $squareRoot; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$primeNumbers = [];

// Start at 2 since 0 and 1 are never prime
for ($i = 2; $i <= 100; $i++) {
    if (isPrime($i)) {
        $primeNumbers[] = $i;
    }
}

echo json_encode($primeNumbers);
?>