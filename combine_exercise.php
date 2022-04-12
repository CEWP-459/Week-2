<?php

function combine($list1 , $list2) {
    $result = [];
    $maxLength = count($list1) > count($list2) ? count($list1) : count($list2);
    for ($i = 0; $i < $maxLength; $i++) {
        array_push($result, $list1[$i], $list2[$i]);
    }
    return $result;
}

$resultArray = combine(["a","b","c"], [1,2,3,5,8]);
for ($i = 0; $i < count($resultArray); $i++) {
    echo $resultArray[$i];
}