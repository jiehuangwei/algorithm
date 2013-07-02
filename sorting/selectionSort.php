<?php
function selectionSort(array $a)
{
    $length = count($a);
    if ( $length < 2 ) {
        return $a;
    }
    for ( $i = 0; $i < $length -1; $i++ ) {
        $min = $i;
        for ( $j = $i + 1; $j < $length; $j++ ) {
            if ( $a[$min] > $a[$j] ) {
                $min = $j;
            }
            // 需要交换最小值
            if ( $min != $i ) {
                $tmp     = $a[$min];
                $a[$min] = $a[$i];
                $a[$i]   = $tmp;
                $min     = $i;
            }
        }
    }
    return $a;
}

// example
$a = [200, 99, 180, 33, 11, 33, 789, 301, 45, 200];
echo "<pre>";
print_r($a);
print_r(selectionSort($a));