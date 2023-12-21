<!DOCTYPE html>
<html lang="en">

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
			<form action="http://php_mvc_oop.test/Team/addaction" id="addteamform">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label id="team_name" for="team_name">Team Name</label>
							<input type="text" name="team_name" value="<?php echo $rows['team_name']  ?>" id="team_name" placeholder="Enter team name" class="form-control" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="founded_year" for="founded_year">Foundation Year</label>
							<input type="date" name="founded_year" value="<?php echo $rows['founded_year'] ?>" id="founded_year" placeholder="Enter foundation year" class="form-control" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label id="country_name" for="country_name">Country Name</label>
							<input type="text" name="country_name" value="<?php echo $rows['country_name'] ?>" id="country_name" placeholder="Enter Country name" class="form-control" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="stadium_name" for="stadium_name">Stadium Name</label>
							<input type="text" name="stadium_name" value="<?php echo $rows['stadium_name'] ?>" id="stadium_name" placeholder="Enter foundation year" class="form-control" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label id="stadium_capacity" for="stadium_capacity">Stadium Capacity</label>
							<input type="number" name="stadium_capacity" value="<?php echo $rows['stadium_capacity'] ?>" id="stadium_capacity" placeholder="Enter Stadium Capacity" class="form-control" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="logo_url" for="logo_url">Logo</label>
							<input type="file" name="logo_url" value="<?php echo $rows['logo_url'] ?>" id="logo_url" placeholder="Enter foundation year" class="form-control" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label id="website_url" for="website_url">Website Url</label>
							<input type="url" name="website_url" value="<?php echo $rows['website_url'] ?>" id="website_url" class="form-control" placeholder="Website Url">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="league_name" for="league_name">League Name</label>
							<input type="text" name="league_name" value="<?php echo $rows['league_name'] ?>" id="league_name" class="form-control" placeholder="Website Url">
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label id="division" for="division">Division</label>
							<input type="text" name="division" value="<?php echo $rows['division'] ?>" id="division" class="form-control" placeholder="division">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="current_manager" for="current_manager">Current Manager</label>
							<input type="text" name="current_manager" value="<?php echo $rows['current_manager'] ?>" id="current_manager" class="form-control" placeholder="current manager">
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

		addteamform.addEventListener("submit", async (e) => {
			e.preventDefault();

			const form = e.currentTarget;
			const url = new URL(form.action);

			const formData = new FormData(addteamform);
			console.log(formData);

			try {
				const response = await fetch(url, {
					method: "POST",
					body: formData,
				});

				if (!response.ok) {
					throw new Error(`Error: ${response.status} - ${response.message}`);
				}


			} catch (error) {
				console.error(error);
			}


		})

		// addskillform.addEventListener("submit", async (e) => {
		//     e.preventDefault();

		//     let name = e.target.name.value;


		//     const formData = new FormData();
		//     formData.append("name", name);

		//     try {

		//         const response = await fetch("http://peoplepertask_backend_auth.test/skills.php?action=assignskill", {
		//             method: "POST",
		//             body: formData,
		//         });



		//         if (!response.ok) {
		//             throw new Error(`Error: ${response.status} - ${response.message}`);
		//         }

		//         if (response.ok) {
		//             const responseData = await response.json();

		//             if (responseData.message != 'Data received successfully!') {
		//                 throw new Error(`Error: ${response.status} - ${response.message}`);
		//             }

		//             successalert.classList.toggle("hidden");
		//             setTimeout(() => {
		//                 successalert.classList.toggle("hidden");
		//                 nameinput.value = "";
		//             }, 1000)

		//             console.log(responseData.message);
		//         }





		//     } catch (error) {
		//         console.error(error);
		//         faildalert.classList.toggle("hidden");
		//         setTimeout(() => {
		//             faildalert.classList.toggle("hidden");
		//             nameinput.value = "";
		//         }, 3000)
		//     }


		// })
	</script>
</body>

</html>