<?php
/*
	A Fibonacci Series of numbers will look like
	0 , 1 , 1 , 2 , 3 , 5 , 8 , 13 , 21 , 34 , 55
*/
// adding some comments 
function feboncci($num) {
	$feboncci = [0,1];
	for ($i=2; $i < $num+2 ; $i++) { 
		$feboncci[$i] = $feboncci[$i-1] + $feboncci[$i-2];
	}

	return $feboncci;
}
var_dump(feboncci(10));
