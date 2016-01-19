<?php
/*
    Quicksort is a divide and conquer algorithm. Quicksort first divides a large array into two smaller sub-arrays: the low elements and the high elements. Quicksort can then recursively sort the sub-arrays.

The steps are:

    Pick an element, called a pivot, from the array.
    Partitioning: reorder the array so that all elements with values less than the pivot come before the pivot, while all elements with values greater than the pivot come after it (equal values can go either way). After this partitioning, the pivot is in its final position. This is called the partition operation.
    Recursively apply the above steps to the sub-array of elements with smaller values and separately to the sub-array of elements with greater values.

The base case of the recursion is arrays of size zero or one, which never need to be sorted.

The pivot selection and partitioning steps can be done in several different ways; the choice of specific implementation schemes greatly affects the algorithm's performance.


*/
function partition(&$arr,$leftIndex,$rightIndex)
{
    $pivot=$arr[($leftIndex+$rightIndex)/2];
     
    while ($leftIndex <= $rightIndex) 
    {        
        while ($arr[$leftIndex] < $pivot)             
                $leftIndex++;
        while ($arr[$rightIndex] > $pivot)
                $rightIndex--;
        if ($leftIndex <= $rightIndex) {  
                $tmp = $arr[$leftIndex];
                $arr[$leftIndex] = $arr[$rightIndex];
                $arr[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
        }
    }
    echo implode(",",$arr)." @pivot $pivot<br>";
    return $leftIndex;
}
 
function quickSort(&$arr, $leftIndex, $rightIndex)
{
    $index = partition($arr,$leftIndex,$rightIndex);
    if ($leftIndex < $index - 1)
        quickSort($arr, $leftIndex, $index - 1);
    if ($index < $rightIndex)
        quickSort($arr, $index, $rightIndex);
}
$nums = array(5,3,8,6,2,7);
echo implode(",",$nums)." @unsorted<br>";
quickSort($nums,0,count($nums)-1);
echo implode(",",$nums)." @sorted<br>";

/*
    algorithm quicksort(A, lo, hi) is
    if lo < hi then
        p := partition(A, lo, hi)
        quicksort(A, lo, p - 1)
        quicksort(A, p + 1, hi)

algorithm partition(A, lo, hi) is
    pivot := A[hi]
    i := lo        // place for swapping
    for j := lo to hi - 1 do
        if A[j] ≤ pivot then
            swap A[i] with A[j]
            i := i + 1
    swap A[i] with A[hi]
    return i
*/

/*function quicksort(&$a, $lo, $hi) {
    if($lo < $hi) {
        $p = partition($a, $lo, $hi);
        quicksort($a, $lo, $p - 1);
        quicksort($a, $p + 1, $hi);
    }
}

function partition(&$a, $lo, $hi) {
    $pivot = $a[$hi];
    $i = $lo;        // place for swapping
    for ($j = $lo; $j<$hi- 1; $j++) {
        if ($a[$j] <= $pivot) {
            $temp = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $temp;
            $i = $i + 1;
        }
    }
    $temp = $a[$i];
    $a[$i] = $a[$hi];
    $a[$hi] = $temp;
    
    return $i;
}

$array = [3,1,5];
quicksort($array, 1, count($array)-1);

var_dump($array);*/