<?php
/**
 *  二分查找
 */
function binarySearch($arr, $value) {
	if(! $arr) return false;
	$start = 0;
	$end   = count($arr) - 1;
	$pos   = false;
	while ($start <= $end) {
		$mid = intval($start + ($end - $start) / 2); // 中间位置,防止溢出

		if(! isset($arr[$mid])) return $pos;

		if($value == $arr[$mid]) { 
			$pos = $mid;
			break;
		} elseif($value > $arr[$mid]) { // 往后找
			$start = $mid + 1; 
		} else { // 往前找
			$end = $mid - 1;
		}	
	}
	return $pos; 
}

$a = [1, 2, 3, 4, 6, 8, 10];
var_dump(binarySearch($a, 9));

$b = [2, 3, 4, 5, 10, 11, 12, 20];
var_dump(binarySearch($b, 4));
