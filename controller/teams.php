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

	protected function addaction(){
		
		extract($_POST);
		$viewmodel = new TeamModel();

		$teamfields = array(
			'team_name' => $team_name,
			'founded_year' => $founded_year,
			'country_name' => $country_name,
			'stadium_name' => $stadium_name,
			'stadium_capacity' => $stadium_capacity, 
			//'logo_url' => $logo_url, 
			'website_url' => $website_url,
			'league_name' => $league_name, 
			'division' => $division, 
			'current_manager' => $current_manager 
		);
		
		$viewmodel->insertRecord("teams", $teamfields);

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