<?php
function bucketSort(array $a)
{
    $box = $sorted = array();
    foreach ($a as $value) {
        $box[$value][] = $value;
    }
    $min = min($a);
    $max = max($a);
    for ( $i = $min; $i <= $max; $i++ ) {
        if ( isset($box[$i]) ) {
            $sorted = array_merge($sorted, $box[$i]);
        }
    }
    return $sorted;
}

// example
$a = [200, 99, 180, 33, 11, 33, 789, 301, 45, 200];
echo "<pre>";
print_r($a);
print_r(bucketSort($a));