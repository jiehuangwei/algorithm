<?php
/**
 * quickSort
 *
 * @param  array  $numArr
 * @return array
 */
function quickSort(array $numArr) {
    if ( count($numArr) <= 1 ) {
        return $numArr;
    }
    $pivot = array_pop($numArr);
    $left = $right = array();
    foreach ($numArr as $one) {
        if ( $one <= $pivot ) {
            array_push($left, $one);
        } else {
            array_push($right, $one);
        }
    }
    $left = quickSort($left);
    $right = quickSort($right);
    return array_merge($left, array($pivot), $right);
}

// example
$arr = array('a', 'b', 111, 99, 10, 1000, 'def');
echo "<pre>";
var_dump($arr);
$sortArr = quickSort($arr);
var_dump($sortArr);