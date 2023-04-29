<?php
// Convert string input to array
$str_arrA = explode (",", $obsA); 
$str_arrB = explode (",", $obsB);

// Array length (Number of Observations)
$no_elementA = count($str_arrA);
$no_elementB = count($str_arrB);

// Creating a sequence for first column (Behaviour)
$beh = range(1,$no_elementA);

// Sum of each observation
$totalA = array_sum($str_arrA);
$totalB = array_sum($str_arrB);


// % Observation A and B
$cent_a = 100/$totalA;
$cent_b = 100/$totalB;

foreach ($str_arrA as $value) {
    $new_str_arrA[] = $value * $cent_a;
}
unset($value);

foreach ($str_arrB as $value) {
    $new_str_arrB[] = $value * $cent_b;
}
unset($value);

// Sum % Observation A and B
$total_arrA = array_sum($new_str_arrA);
$total_arrB = array_sum($new_str_arrB);

// Sum % Observation A and B to 2dp
foreach ($new_str_arrA as $value) {
    $new_arrA[] = round($value, 2);
}
unset($value);

foreach ($new_str_arrB as $value) {
    $new_arrB[] = round($value, 2);
}
unset($value);

// Absolute Difference
$result= array_map(function($a, $b) {
    return abs($a - $b);
},$new_arrA, $new_arrB);

// Absolute Difference to 2dp

foreach ($result as $value) {
    $ru_result[] = round($value, 2);
}
unset($value);

// Sum of Absolute Difference 
$absDiff = array_sum($result);

// Po value
$hundred = 100;
$p_nut = $hundred - $absDiff;

// Average Percentage
$av_cent = array_map(function($a, $b) {
    return $a * $b;
},$new_arrA, $new_arrB);

$per=1/100;

foreach ($av_cent as $value) {
    $totalAv[] = $value * $per;
}
unset($value);

foreach ($totalAv as $value) {
    $new_totalAv[] = round($value, 2);
}
unset($value);

// Pe Value
$p_expected = array_sum($new_totalAv);

?>


