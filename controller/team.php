<?php

require_once "model/team.php";

class Team extends Controller
{

	protected function show()
	{
		$viewmodel = new TeamModel();
		$rows = $viewmodel->selectRecords("teams");

		$view = $this->getView($viewmodel->Index(), false);
		require_once "$view";
	}

	protected function update()
	{
		$id = $_GET['id'];

		if ($id !== "") {
			$viewmodel = new TeamModel();
			$rows = $viewmodel->selectSingleRecords("teams", "*", "team_id = $id");
			$view = $this->getView($viewmodel->Index(), false);
			require_once "$view";
		}else {
			echo '<h1>ERROR 404: Page Not Found</h1>';
		}
	}

	protected function add()
	{

		$viewmodel = new TeamModel();
		$view = $this->getView($viewmodel->Index(), false);
		require_once "$view";
	}

	protected function delete()
	{
		$viewmodel = new TeamModel();
		$this->getView($viewmodel->Index(), false);
	}

	protected function addaction()
	{

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

		$insertedId = $viewmodel->insertRecord("teams", $teamfields);

		if ($insertedId) {
			$message = "Team inserted successfully!";
			http_response_code(200);
			echo json_encode([
				"message" => $message,
				"Id" => $insertedId
			]);
		}
	}
	protected function updateaction()
	{
		extract($_POST);
		$viewmodel = new TeamModel();

		$id = $_POST['team_id'];


		
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

		$insertedId = $viewmodel->updateRecord("teams", $teamfields, $id);

		if ($insertedId) {
			$message = "Team Updated successfully!";
			http_response_code(200);
			echo json_encode([
				"message" => $message,
				"Id" => $insertedId
			]);
		}
	}
}