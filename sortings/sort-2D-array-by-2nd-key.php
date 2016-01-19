<?php
//Sort a 2D array by the second value
$array = [
			['b',3],
			['d',1],
			['g',2],
			['a',10],
			['c',9],
			['e',5],
			['f',8]
		];
echo "Before Sort: ";
var_dump($array);


// you can provide sort with a comparison function.
echo "After Sort: ";
$sort = usort($array,function($a,$b){
		return $a[1] - $b[1];
});
var_dump($array);