<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$reqArr = explode("/", $_SERVER['REQUEST_URI']);
array_shift($reqArr);
array_shift($reqArr);
if(count($reqArr) > 0){
	@include('Controllers/'.$reqArr[0].'.php');	

	$test = new $reqArr[0]();

	if(count($reqArr) > 1){
		$func = $reqArr[1]; 
		$test->$func();
		$test->loadView("welcome.view");
	}
}

