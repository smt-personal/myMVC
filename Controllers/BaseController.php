<?php


class BaseController{

	public function __construct(){

	}

	public function doFoo(){
		
	}

	public function loadView($path){
		return readfile($_SERVER['DOCUMENT_ROOT']."/myMVC/Views/".$path.".php");
	}
}


