<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>delete team</h1>
    <br>
    <p>you want to delete team with the </p>
    <br>
    <p>ID: <?php echo $row['team_id'] ?></p>
    <p>Team Name: <?php echo $row['team_name'] ?></p>

    <form id="deletTeamForm" action="http://php_mvc_oop.test/Team/deleteaction/<?php echo $row['team_id'] ?>" method="post">
        <input type="hidden" value="<?php echo $row['team_id'] ?>" name="team_id">
        <button type="submit">Delete</button>
    </form>

    <script>
        let deletTeamForm = document.getElementById('deletTeamForm');

        deletTeamForm.addEventListener("submit", async (e) => {
            e.preventDefault();

            const form = e.currentTarget;
            const url = new URL(form.action);

            const formData = new FormData(deletTeamForm);
            

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
    </script>
</body>

</html>