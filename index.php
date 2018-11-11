<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//print_r($_SERVER);
//die();

$reqArr = explode("/", $_SERVER['REQUEST_URI']);
array_shift($reqArr);
array_shift($reqArr);
if(count($reqArr) > 0){	

	$class = $reqArr[0];
	if(is_object($class)){
		@include('Controllers/'.$class.'.php');
		$test = new $class();

		if(count($reqArr) > 1){
			$func = $reqArr[1]; 
			$test->$func();
		}
	}else{
		@include('Controllers/BaseController.php');
		$test = new BaseController();
		$test->loadView("404error");
	}
}

