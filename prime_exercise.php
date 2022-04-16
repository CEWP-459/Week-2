<?php

function isPrime($number) {
    $counter = 0;
    if ($number == 0) {
        return "0 is Neither Prime Nor Composite";
    }
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $counter++;
        }
        if ($counter > 2) {
            return "$number is Composite";
        } 
    }
    if($counter == 2) {
        return "$number is Prime";
    }
}

echo isPrime(21);