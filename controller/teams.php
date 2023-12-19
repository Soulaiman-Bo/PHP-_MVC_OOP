<?php

class Team extends Controller{
	protected function Index(){
		// $viewmodel = new HomeModel();
		// $this->getView($viewmodel->Index(), true);
	}

	protected function add(){
		$viewmodel = new TeamModel();
		$this->getView($viewmodel->Index(), false);
	}

	protected function delete(){
		$viewmodel = new TeamModel();
		$this->getView($viewmodel->Index(), false);
	}

	protected function create(){
		$viewmodel = new TeamModel();
		$this->getView($viewmodel->Index(), false);
	}

}

?>