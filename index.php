<?php 

require_once "config.php";


require_once "classes/Router.php";
require_once "classes/Controller.php";
require_once "classes/Model.php";

require_once "controller/teams.php";

require_once "model/team.php";

$router = new Router($_GET); // Get all url parameters
$controller = $router->createController();

if($controller){
	$controller->runAction();
}

