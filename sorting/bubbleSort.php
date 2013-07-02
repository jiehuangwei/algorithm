<?php
/**
 * bubbleSort
 *
 * @param  array  $a
 *
 * @return array
 */
function bubbleSort(array $a)
{
    $length = count($a);
    if ( $length < 2 ) {
        return $a;
    }
    for ($i = 0; $i < $length; $i++) {
        for ($j = $length-1; $j > $i; $j--) {
            if ( $a[$j] < $a[$j-1] ) {
                $tmp     = $a[$j];
                $a[$j]   = $a[$j-1];
                $a[$j-1] = $tmp;
            }
        }
    }
    return $a;
}

// example
$a = [1, 5, 3, 100, 40, 50];
echo "<pre>";
print_r($a);
$a = bubbleSort($a);
print_r($a);