<?php
/**
 * mergeSort
 *
 * @param  array  $a
 * @param  array  $b
 * @return array
 */
function mergeSort(array $a, array $b) {
    if ( empty($a) && empty($b)) {
        return array();
    }
    $aCount = $bCount = $count = 0;
    $sort = array();
    while ( $aCount < count($a) && $bCount < count($b) ) {
        if ( $a[$aCount] < $b[$bCount] ) {
            $sort[$count++] = $a[$aCount++];
        } else {
            $sort[$count++] = $b[$bCount++];
        }
    }
    while ( $aCount < count($a) ) {
        $sort[$count++] = $a[$aCount++];
    }
    while ( $bCount < count($b) ) {
        $sort[$count++] = $b[$bCount++];
    }
    return $sort;
}

// example
$a = range(rand(2,5),rand(100,500),rand(1,3));
$b = range(rand(1,3),rand(50,500),rand(2,5));
$a = array_rand($a, 5);
$b = array_rand($b, 8);
echo "<pre>";
print_r($a);
print_r($b);
print_r(mergeSort($a, $b));