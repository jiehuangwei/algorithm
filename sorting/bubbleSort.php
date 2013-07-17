<?php
/**
 * bubbleSort 冒泡排序
 *
 * 原理：
 *     1.比较相邻的元素。如果第一个比第二个大，就交换他们两个。
 *     2.对每一对相邻元素作同样的工作，从第一对到最后一对。最后的元素应该会是最大的数。
 *     3.针对所有的元素重复以上的步骤，除了最后一个。
 *     4.持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
 *
 * 时间复杂度：最好 O(n)  平均 O(n^2)  最坏 O(n^2)
 * 空间复杂度：O(1)
 *
 */

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