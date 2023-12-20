<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Survey Form</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="http://php_mvc_oop.test/public/assets/css/addteam.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<header class="header">
		<h1 id="title" class="text-center">create Team</h1>
	</header>
	<div class="form-wrap">	
		<form  id="addteamform">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="team_name" for="team_name">Team Name</label>
						<input type="text" name="team_name" id="team_name" placeholder="Enter team name" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="founded_year" for="founded_year">Foundation Year</label>
						<input type="date" name="founded_year" id="founded_year" placeholder="Enter foundation year" class="form-control" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="country_name" for="country_name">Country Name</label>
						<input type="text" name="country_name" id="country_name" placeholder="Enter Country name" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="stadium_name" for="stadium_name">Stadium Name</label>
						<input type="text" name="stadium_name" id="stadium_name" placeholder="Enter foundation year" class="form-control" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="stadium_capacity" for="stadium_capacity">Stadium Capacity</label>
						<input type="text" name="stadium_capacity" id="stadium_capacity" placeholder="Enter Stadium Capacity" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="logo_url" for="logo_url">Logo</label>
						<input type="file" name="logo_url" id="logo_url" placeholder="Enter foundation year" class="form-control" required>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="website_url" for="website_url">Website Url</label>
						<input type="url" name="website_url" id="website_url"  class="form-control" placeholder="Website Url" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="league_name" for="league_name">League Name</label>
						<input type="text" name="league_name" id="league_name"  class="form-control" placeholder="Website Url" >
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="division" for="division">Division</label>
						<input type="text" name="division" id="division"  class="form-control" placeholder="division" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="current_manager" for="current_manager">Current Manager</label>
						<input type="text" name="current_manager" id="current_manager"  class="form-control" placeholder="current manager" >
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-md-4">
					<button type="submit" id="submit" class="btn btn-primary btn-block">Add Team</button>
				</div>
			</div>

		</form>
	</div>	
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
	<script>
		let addteamform = document.getElementById('addteamform');

		addteamform.addEventListener("submit", (e)=> {
			e.preventDefault();
		})

		


	</script>
</body>
</html>