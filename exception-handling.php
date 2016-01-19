<?php
// Basic use of exception

/* 1. When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block
	if an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.
*/

// create function with an exception
/*function checkNum( $number ) {
	if( $number > 1 ) {
		throw new Exception("Value must be 1 or below");
	}
	return true;
}

// trigger exception
checkNum(2);*/

// The code above will get an error like this:

/*
	Fatal error: Uncaught exception 'Exception' with message 'Value must be 1 or below' in /opt/lampp/htdocs/practice-zone/exception-handling.php:12 Stack trace: #0 /opt/lampp/htdocs/practice-zone/exception-handling.php(18): checkNum(2) #1 {main} thrown in /opt/lampp/htdocs/practice-zone/exception-handling.php on line 12

*/

/*	try, throw and catch 
	2. To avoid the error from the example above, we need to create the proper code to handle an exception.

	Proper exception code should include:

    2.1 Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
    2.2 Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
    2.3 Catch - A "catch" block retrieves an exception and creates an object containing the exception information

*/	

// create a function with exception 
/*function checkNum( $number ) {
	if( $number > 1 ) {
		throw new Exception("Value must be 1 or below");
	}
	return false;
}

// trigger exception in a "try" block
try {
	checkNum(2);

	// If the exception will thrown, this code will not be shown
	echo "If you see this, the number is 1 or below"; 
}

// catch the exception
catch( Exception $e) {
	echo "Message: ". $e->getMessage();
}*/


/*
3. Creating a Custom Exception Class
	
	Creating a custom exception handler is quite simple. We simply create a special class with functions that can be called when an exception occurs in PHP. The class must be an extension of the exception class.

	The custom exception class inherits the properties from PHP's exception class and you can add custom functions to it.	

*/

/*class customException extends Exception {

	public function errorMessage() {
		// error message
		$errorMsg = "Error on line: ". $this->getLine(). " in ". $this->getFile()." : <b>". $this->getMessage(). "</b> is not a valid E-mail address";
		return $errorMsg;
	}
}

$email = "someone@example...com";

try {
	// check if
	if( filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE ) {
		// throw exception if email is not valid
		throw new customException($email);
	}
} catch( customException $e) {
	// display custom message
	echo $e->errorMessage();
}*/


/*
	4. MULTIPLE EXCEPTIONS
*/

/*class customException extends Exception {

	public function errorMessage() {
		// error message 
		$errorMsg = "Error on line: ".$this->getLine()." in ".$this->getFile().": <b>".$this->getMessage()."</b> is not a valid E-maill address";
		return $errorMsg;
	}
}

// email

$email = "someone@example.com";

try {
	// check email validation
	if( filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE ){
		throw new customException($email);
	}

	// check for "example" in mail address
	if( strpos($email, "example") !== FALSE ) {
		throw new Exception("$email is an example email");
	}
} catch( customException $e ) {
	echo $e->errorMessage();
} catch( exception $e ) {
	echo $e->getMessage();
}*/

/*
	5. RE-THROWING EXCEPTIONS

	It is possible to throw an exception a second time within a "catch" block.

	USE : 
		A script should hide system errors from users. System errors may be important for the coder, but are of no interest to the user. To make things easier for the user you can re-throw the exception with a user friendly message:
*/

/*class customException extends Exception {
	public function errorMessage() {
		// error message 
		$errorMsg = $this->getMessage()." is not a valid E-mail address";
		return $errorMsg;
	}
}

$email = "someone@example.com";

try {
	try {
		// check for "example" in email address
		if( strpos($email, "example") !== FALSE ) {
			// throw exception if email is not valid
			throw new Exception($email);
		}
	} catch( Exception $e ) {
		// re-throw exception
		throw new customException($email);
	}
} catch( customException $e ) {
	// display custom message
	echo $e->errorMessage();
}*/

/*
	6. Set a Top Level Exception Handler

		The set_exception_handler() function sets a user-defined function to handle all uncaught exceptions.
*/

function myException( $execution ) {
	echo "<b>Exception:</b> ".$execution->getMessage();
}

set_exception_handler("myException");

throw new Exception("Uncaught Exception occurred");

