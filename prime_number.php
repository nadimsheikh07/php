<?php

function isPrime(int $number): bool
{
    // Numbers less than or equal to 1 are not prime
    if ($number <= 1) {
        return false;
    }
    // 2 is the only even prime number
    if ($number === 2) {
        return true;
    }
    // Exclude all other even numbers instantly
    if ($number % 2 === 0) {
        return false;
    }

    // Check odd factors up to the square root of the number
    $maxCheck = sqrt($number);
    for ($i = 3; $i <= $maxCheck; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

// Example usage:
var_dump(isPrime(7)); // Outputs: bool(true)
var_dump(isPrime(4));  // Outputs: bool(false)

?>