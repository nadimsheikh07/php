<?php
// super global variables are built-in variables that are always available in all scopes.
$x = 5;
$y = 10;

function myTest()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15

echo "<br/>";


$x = 5; // global scope

function globalTest()
{
    // to access the global variable x inside this function, we need to use the global keyword
    global $x;
    $x = 10; // this will change the value of x in the global scope
    // using x inside this function will not work
    echo "Variable x inside function is: $x";
    echo "<br/>";
}
globalTest();

echo "Variable x outside function is: $x";
echo "<br/>";


function localTest()
{
    $y = 20; // local scope
    echo "Variable y inside function is: $y";
    echo "<br/>";
}

localTest();

echo "<br/>";


function staticTest()
{
    static $z = 0; // static variable
    $z++;
    echo "Variable z inside function is: $z";
    echo "<br/>";
}
staticTest();
staticTest();
staticTest();
?>