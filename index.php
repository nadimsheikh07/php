<?php

abstract class ATest
{
    protected $a;
    protected $b;
    public abstract function test($a, $b);
}

class TestClass extends ATest
{
    public function test($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->a + $this->b;
    }
}

$test = new TestClass();
$result = $test->test(5, 10);
echo $result;
?>