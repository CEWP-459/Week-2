<?php

//Math Functions
echo pow(2, 4);
echo "<br>";
echo rand(1, 1000); //rand()
echo "<br>";
echo sqrt(100);
echo "<br>";
echo ceil(98.76);
echo "<br>";
echo floor(98.76);
echo "<br>";
echo round(98.55);
echo "<br>";
echo round(98.49);
echo "<br>";

//String Functions
$string = "Hi, how are you?";
echo strlen($string);
echo "<br>";
// echo count($string); //wrong!!!
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo $string;
echo "<br>";
echo strtolower($string);
echo "<br>";

//Array Functions
$array = [23, 9, 0, 2683, 323, 4, 102];
echo max($array);
echo "<br>";
echo min($array);
echo "<br>";
print_r($array);
echo "<br>";
sort($array);
print_r($array);
echo "<br>";