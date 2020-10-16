<?php require_once('vendor/autoload.php');$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);$dotenv->load();

/*
	 class MyException extends \Exception
	 {

	 }

try {
	throw new \Exception('Original message', 10);
} catch ($e) {
	throw new MyException('New message', 20, $e);
}
*/
echo "Hello";
