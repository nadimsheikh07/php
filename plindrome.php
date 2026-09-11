<?php
function isPalindrome($string)
{
    // Remove spaces and convert to lowercase for accuracy
    $cleanString = strtolower(str_replace(' ', '', $string));
    $reverseString = strrev($cleanString);

    return $cleanString === $reverseString;
}

$testStr = "rar";
if (isPalindrome($testStr)) {
    echo "$testStr is a Palindrome\n";
} else {
    echo "$testStr is not a Palindrome\n";
}
?>