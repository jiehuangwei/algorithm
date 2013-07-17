<?php
/**
 * selectionSort 选择排序
 *
 * 原理：
 *     1.首先在未排序序列中找到最小（大）元素，存放到排序序列的起始位置
 *     2.然后，再从剩余未排序元素中继续寻找最小（大）元素，放到已排序序列的末尾
 *     3.重复1,2步，直到所有元素均排序完毕
 *
 * 时间复杂度： O(n^2)
 * 空间复杂度： O(1)
 *
 */

/**
 * selectionSort
 *
 * @param  array  $a 需要排序的数据
 *
 * @return array  $a 排序后的数据
 *
 */
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