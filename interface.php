<?php

interface ITest
{
    public function test($a, $b);
}

class TestClass implements ITest
{
    public function test($a, $b)
    {
        return $a + $b;
    }
}

$test = new TestClass();
$result = $test->test(5, 10);
echo $result;
?>