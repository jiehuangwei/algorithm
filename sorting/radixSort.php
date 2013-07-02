<?php
function radixSort(&$input)
{
    // initialize 这种方式存在大量空间浪费
    $min = min($input);
    $max = max($input);
    $temp = array_fill($min, $max, 0);

    //$temp = array();
    foreach ($input as $key => $val) {
        //$val = intval($val);
        $temp[$val]++;
        // 避免空间的浪费
        //$temp[$val] = isset($temp[$val]) ? $temp[$val] + 1 : 1;
    }
//var_dump($temp);exit;
    $input = array();
    foreach ($temp as $key => $val) {
        if ($val == 1) {
            $input[] = $key;
        } else {
            while ($val--) {
                $input[] = $key;
            }
        }
    }
}

// example
$arr = array(7, 9, 5, 9, 76, 2, 4, 5, 1, 8, 5, 11000);
echo "<pre>";
print_r($arr);
radixSort($arr);
print_r($arr);
