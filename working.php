<?php
ini_set("error_reporting", E_ALL);
ini_set("display_error", 1);

/*
	Adding comments for git checking
*/

/*$foo = "i am foo variable";

function get_foo() {
	echo $foo;  // Notice: Undefined variable: foo in /opt/lampp/htdocs/cms/working.php on line 9
}

get_foo();*/


/*
$num1 = 10;
//$num2 = "10"; // sum = 20
//$num2 = "10asdfadsf"; // sum = 20
//$num2 = "adsfdf10"; // sum = 10
$num2 = 05; // sum = 15
//echo $num1+ $num2;

//$num3 = "10$"; // 25
$num3 = "$10"; // 15
$num3 = "$"; // 15
$num3 = "$sd"; /* Notice: Undefined variable: sd in /opt/lampp/htdocs/cms/working.php on line 24
15 */
//echo $num1+ $num2 + $num3;
//*/

// print 7 days BEFORE date 
echo "<b>print 7 days BEFORE date using PHP :</b> <br />";
echo "<pre> date('Y-m-d', strtotime('-7 days')) 
  <b>Result</b> : ".date('Y-m-d', strtotime('-7 days'))."
	</pre>";

//echo date('Y-m-d', strtotime('-7 days'));

$date = new DateTime('7 days ago');
//echo $date->format('Y-m-d');

echo "OR <pre> \$date = new DateTime('7 days ago'); 
 \$date->format('Y-m-d');
 <b>Result</b> : ".$date->format('Y-m-d')."
	</pre>";

// print 7 days AFTER date 
echo "<b>print 7 days AFTER date using PHP :</b> <br />";
echo "<pre> date('Y-m-d', strtotime('+7 days')) 
  <b>Result</b> : ".date('Y-m-d', strtotime('+7 days'))."
	</pre>";

//echo date('Y-m-d', strtotime('+7 days'));

$date = new DateTime('+7 days');
//echo $date->format('Y-m-d');

echo "OR <pre> \$date = new DateTime('+7 days'); 
 \$date->format('Y-m-d');
 <b>Result</b> : ".$date->format('Y-m-d')."
	</pre>";



echo "<hr />";
// query get 7 days BEFORE data
echo "<b>query get 7 days Before data :</b> <br />";
echo $q = "SELECT *FROM Orders WHERE orderDate >= date( now() ) - INTERVAL 7 DAY";

echo "<br /><br />";
echo "<b>query get 7 days AFTER data :</b> <br />";
// query get 7 days AFTER data
echo $q = "SELECT *FROM Orders WHERE orderDate between date(now()) AND date( now() ) + INTERVAL 7 DAY";


