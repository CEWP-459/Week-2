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
