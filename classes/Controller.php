<?php

abstract class Controller{

	protected $request;
	protected $action;

	public function __construct($action, $request){
		$this->action = $action;
		$this->request = $request;
	}

	public function runAction(){
		return $this->{$this->action}();
	}

	public function getView($viewmodel, $fullview){
		$view = 'views/' .  strtolower(get_class($this)) . '/' . $this->action . '.php';

		if($fullview){
			require('views/main.php');
		} else {
			require($view);
		}
	}

}

?>