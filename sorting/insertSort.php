<?php
function insertSort($a)
{
    foreach ($a as $key => $value) {
        $i = $key -1;
        while ( $i >= 0 && $value < $a[$i] ) {
            $tmp = $a[$i+1];
            $a[$i+1] = $a[$i];
            $a[$i] = $tmp;
            $i--;
        }
    }
    return $a;
}

// example
$a = [1, 5, 3, 100, 40, 50];
echo "<pre>";
print_r($a);
$a = insertSort($a);
print_r($a);