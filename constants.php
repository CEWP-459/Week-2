<?php

$x = 10;
echo $x . "<br>";

define("NAME", "Kritika Sharma"); //old way
echo NAME . "<br>";

// echo constant("NAME") . "<br>"; 
// print_r(get_defined_constants());

const NEW_NAME = "KS";
echo NEW_NAME . "<br>";