<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extinct Test</title>
    <link rel="stylesheet" href="phpTest.css">
</head>
<body>
<?php
    $db = parse_url(getenv("DATABASE_URL"));
    $dbconnect = mysqli_connect($db);

    if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
    } else {
        echo "Connected!";
    }

    $query = mysqli_query($dbconnect, "SELECT ''burgername FROM recipes")
    or die (mysqli_error($dbconnect));

    while ($row = mysqli_fetch_array($query)) {
    echo
    "<h4>{$row['burgername']}</h4>";
    }
    ?>

?>
<p>This is the main page</p>
<p>burger name</p>
=

</body>
</html>