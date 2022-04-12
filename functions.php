<?php

//define a function
function say_something() {
    echo "Hi, welcome to the world of PHP!\n";
}

//nesting functions
function sum() {
    echo 45+23;
}
function init() {
    say_something();
    sum();
}
init();

//function parameters
function greeting($name, $course) {
    echo "\nHi $name, welcome to $course!\n";
}
greeting("KS", "CEWP 459");

//return value from functions
function calculator($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;  
        case '*':
            return $a * $b;  
        case '/':
            if ($b == 0) {
                return "Invalid Operation!";
            }
            return $a / $b;  
        case '%':
            return $a % $b;
        case '**':
            return $a ** $b;  
        default:
            return "Invalid Operation!";
    }
}

echo calculator(5, 0, '/') . "\n";
echo calculator(5, 988, '-') . "\n";

//scope
$x = "out"; //global scope
function convert() {
    global $x;
    $x = "in"; //local scope
}
echo "1" . $x . "\n";
convert();
echo "2" . $x . "\n";


