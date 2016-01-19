<?php
// print pyramids
/* 1.
	1
	22
	333
	4444
	55555
	666666
	7777777
	88888888
	999999999
	10101010101010101010
*/

printPyramid(1,10);
function printPyramid($start, $length) {
	for ($i=0; $i < $length ; $i++) { 
		for ($j=0; $j <= $i; $j++) { 
			echo $start+$i;
		}

		echo "<br />";
	}
}

/* 2.
	1
	12
	123
	1234
	12345
	123456
	1234567
	12345678
	123456789
	12345678910
*/

echo "<hr />";

printPyramid2(1,10);
function printPyramid2($start, $length) {
	for ($i=0; $i < $length ; $i++) { 
		for ($j=0; $j <= $i; $j++) { 
			echo $j+1;
		}

		echo "<br />";
	}
}

/* 3.
	*
	**
	***
	****
	*****
	******
	*******
	********
	*********
	**********
*/

echo "<hr />";

printPyramid3('*',10);
function printPyramid3($char, $length) {
	for ($i=0; $i < $length ; $i++) { 
		for ($j=0; $j <= $i; $j++) { 
			echo $char;
		}

		echo "<br />";
	}
}



/* 4.
         *
        **
       ***
      ****
     *****
    ******
   *******
  ********
 *********
**********
*/

echo "<hr />";

printPyramid3('*',10);
function printPyramid3($char, $length) {
	for ($i=0; $i < $length ; $i++) { 
		for ($j=0; $j <= $i; $j++) { 
			echo $char;
		}

		echo "<br />";
	}
}