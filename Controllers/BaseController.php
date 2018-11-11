<?php


class BaseController{

	protected $baseFolder;

	public function __construct(){
		
		$this->baseFolder =  $_SERVER['SCRIPT_NAME'];
	}

	public function index(){
		$this->loadView("welcome");
	}

	public function error(){
		$this->loadView("404error");
	}

	public function loadView($path){
		return readfile($_SERVER['DOCUMENT_ROOT']."/myMVC/Views/".$path.".php");
	}
}


