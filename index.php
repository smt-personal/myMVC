<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//print_r($_SERVER);
//die();

$reqArr = explode("/", $_SERVER['REQUEST_URI']);
array_shift($reqArr);
$appFolder = array_shift($reqArr);
if(count($reqArr) > 0){	

	$class = $reqArr[0];
	@include('Controllers/'.$class.'.php');
	$obj = null;
	if(class_exists($class)){
		$obj = new $class();
	}

	if(is_object($obj)){
		if(count($reqArr) > 1){
			$func = $reqArr[1]; 
			$obj->$func();
		}else{
			$obj->index();
		}
	}else{
		include('Controllers/BaseController.php');
		$obj = new BaseController();
		$obj->error();
	}
}

