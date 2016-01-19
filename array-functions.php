<?php
/*
1. array_chunk() : The array_chunk() function splits an array into chunks of new arrays.
	syntax: array_chunk(array,size,preserve_key); 

	array 	Required. Specifies the array to use
	size 	Required. An integer that specifies the size of each chunk
	preserve_key 	Optional. Possible values:

		    true - Preserves the keys
		    false - Default. Reindexes the chunk numerically

*/

/*$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
var_dump($cars);
var_dump(array_chunk($cars,2));*/

// Split an array into chunks of two and preserve the original keys:
/*$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
var_dump($age);
var_dump(array_chunk($age, 2, true));*/

/*
2. array_column() : The array_column() function returns the values from a single column in the input array.
	Syntax : array_column(array,column_key,index_key);

	array :	Required. Specifies the multi-dimensional array (record-set) to use
	column_key : 	Required. An integer key or a string key name of the column of values to return. This parameter can also be NULL to return complete arrays (useful together with index_key to re-index the array)
	index_key :	Optional. The column to use as the index/keys for the returned array 
*/

//e1.  Get column of last names from a recordset:

// An array that represents a possible record set returned from a database
/*$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name');
var_dump($a);
var_dump($last_names);*/

// e2. Get column of last names from a recordset, indexed by the "id" column:
/*$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name','id');
var_dump($a);
var_dump($last_names);*/

/*
3. array_combine() : The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
	Note: Both arrays must have equal number of elements!

	Syntax : array_combine(keys,values);

	keys :	Required. Array of keys
	values : 	Required. Array of values 

	Return Value: 	Returns the combined array. FALSE if number of elements does not match
*/

//e1.  Create an array by using the elements from one "keys" array and one "values" array:
/*$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
var_dump($fname);
var_dump($age);
var_dump($c);*/


/*
4. array_merge() : The array_merge() function merges one or more arrays into one array.
	
	Tip: You can assign one array to the function, or as many as you like.
	Note: 1. If two or more array elements have the same key, the last one overrides the 
			 others.
		  2. If you assign only one array to the array_merge() function, and the keys are 	
		  	 integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See Example 1 below).
	Tip: The difference between this function and the array_merge_recursive()
		     function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

	Syntax:	array_merge(array1,array2,array3...);
	
	array1 	Required. Specifies an array
	array2 	Optional. Specifies an array
	array3,... 	Optional. Specifies an array

	Return Value: 	Returns the merged array
*/

//e1.  Merge two arrays into one array:
/*$a1=array("red","green");
$a2=array("blue","yellow");
var_dump($a1);
var_dump($a2);
var_dump(array_merge($a1,$a2));*/

//e2.  Merge two associative arrays into one array:
/*$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
var_dump($a1);
var_dump($a2);
var_dump(array_merge($a1,$a2));*/

//e2.  Using only one array parameter with integer keys:
/*$a1=array(3=>"red",4=>"green");
var_dump($a1);
var_dump(array_merge($a1));*/

/*
5. array_diff() : The array_diff() function compares the values of two (or more) arrays,
				  and returns the differences.
	Note: This function compares the values of two (or more) arrays, and return an array 
		  that contains the entries from array1 that are not present in array2 or array3, etc.

	Syntax : array_diff(array1,array2,array3...);

	array1 	Required. The array to compare from
	array2 	Required. An array to compare against
	array3,... 	Optional. More arrays to compare against

	Return Value: 	Returns an array containing the entries from array1 that are not present in any of the other arrays
*/

//e1.  Compare the values of three arrays, and return the differences:
/*$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
var_dump($result);*/


/*$a1=array("Dog","Dog","Cat");
$a2=array("Pluto","Fido","Missy");
array_multisort($a1,$a2);
var_dump($a1);
var_dump($a2);*/