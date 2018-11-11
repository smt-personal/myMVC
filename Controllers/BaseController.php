<?php


class BaseController{

	public function __construct(){

	}

	public function loadView($path){
		return readfile($_SERVER['DOCUMENT_ROOT']."/myMVC/Views/".$path.".php");
	}
}


