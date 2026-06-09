<?php

class TestClass
{
    // 1. Create a static counter property
    private static int $instanceCount = 0;

    // 2. Increment the counter every time a new object is instantiated
    public function __construct()
    {
        self::$instanceCount++;
    }

    // 3. Create a static method to read the total count
    public static function getCount(): int
    {
        return self::$instanceCount;
    }
}

$obj = new TestClass();

$obj1 = new TestClass();

// 4. Retrieve the total number of objects created
$objectCount = TestClass::getCount();

echo $objectCount; // Outputs: 2
?>