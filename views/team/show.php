<!doctype html>
<html lang="en">

<head>
    <title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="http://php_mvc_oop.test/public/assets/css/show.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Table #01</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Team Name</th>
                                    <th>Founded year</th>
                                    <th>Country</th>
                                    <th>Stadium</th>
                                    <th>Stadium Capacity</th>
                                    <th>URL</th>
                                    <th>league name</th>
                                    <th>Division</th>
                                    <th>Manager</th>
                                </tr>
                            </thead>

                            <tbody>                
                                <?php foreach ($rows as $row) : ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?= $row['team_name'] ?></td>
                                        <td><?= $row['founded_year'] ?></td>
                                        <td><?= $row['country_name'] ?></td>
                                        <td><?= $row['stadium_name'] ?></td>
                                        <td><?= $row['stadium_capacity'] ?></td>
                                        <td><?= $row['website_url'] ?></td>
                                        <td><?= $row['league_name'] ?></td>
                                        <td><?= $row['division'] ?></td>
                                        <td><?= $row['current_manager'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="http://php_mvc_oop.test/public/assets/js/jquery.min.js"></script>
    <script src="http://php_mvc_oop.test/public/assets/js/popper.js"></script>
    <script src="http://php_mvc_oop.test/public/assets/js/bootstrap.min.js"></script>
    <script src="http://php_mvc_oop.test/public/assets/js/main.js"></script>

</body>

</html>