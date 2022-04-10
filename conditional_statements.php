<?php

// $my_array = [];

//if else construct
// if (empty($my_array)) { 
//     echo "Array Empty!\n";
// } else {
//     echo "Array Not Empty!\n";
// }

//if else with comparison operators
$name = "Sally";
$age = 18;
if ($age >= 18) {
    echo "{$name} is allowed to hold a TFSA account!\n";
} else {
    echo "{$name} is not allowed to hold a TFSA account!\n";
}

//if else with comparison operators 2
// $contributionRoom = 6000;
// $contributionAmount = 0;
// echo "{$name} is {$age} years old and her TFSA Contribution Room is CA\${$contributionRoom}!\n";
// if ($age >= 18) {
//     $contributionAmount = 500; 
//     echo "{$name} made a contribution of CA\${$contributionAmount} towards her TFSA!\n";
//     $contributionRoom = $contributionRoom - $contributionAmount;
// } else {
//     echo "{$name} is not allowed to hold a TFSA account!\n";
// }
// echo "{$name} is {$age} years old and now her TFSA Contribution Room is CA\${$contributionRoom}!\n";

//if else with comparison operators 3 | Ternary Operator
$contributionAmount = 0;
$contributionRoom =  $age >= 18 ? 6000 : 0;
echo "{$name} is {$age} years old and her TFSA Contribution Room is CA\${$contributionRoom}\n";
if ($age >= 18) {
    $contributionAmount = 1200; 
    echo "{$name} made a contribution of CA\${$contributionAmount} towards her TFSA!\n";
    $contributionRoom = $contributionRoom - $contributionAmount;
} else {
    echo "{$name} is not allowed to hold a TFSA account!\n";
}
echo "{$name} is {$age} years old and now her TFSA Contribution Room is CA\${$contributionRoom}!\n";

//if else if else with comparison operators 4
$membership;
if ($contributionAmount < 500) {
    $membership = "Silver";
} else if ($contributionAmount >= 500 && $contributionAmount <= 1000) {
    $membership = "Gold";
} else {
    $membership = "Platinum";
}
echo "{$name} is a {$membership} member of the TFSA policy!\n";

//switch operator
$day = "Tuesday";
switch ($day) {
    case "Monday": 
        echo "Monday";
        break;
    case "Tuesday":
        echo "Tuesday";
        break;
    case "Wednesday":
        echo "Wednesday";
        break;
    case "Thursday":
        echo "Thursday";
        break;
    case "Friday":
        echo "Friday";
        break;
    case "Saturday":
        echo "Saturday";
        break;
    case "Sunday":
        echo "Sunday";
        break;
    default: 
        echo "Day Info Not Available!";   
}