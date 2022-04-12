<?php

$array = [];
for ($i = 0; $i < 10; $i++) {
    if ($i < 4) {
        $array[] = "a";
    } else if ($i >= 4 && $i <= 7) {
        $array[] = "b";
    } else {
        $array[] = "c";
    }
}

print_r($array);

