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
    $db_url = parse_url(getenv("DATABASE_URL"));

    $db = pg_connect($db_url);
    if(!$db) {
       echo "Error : Unable to open database\n";
    } else {
       echo "Opened database successfully\n";
    }

    $result = pg_query($db, "SELECT ingredient FROM ingredients");
    $row = pg_fetch_assoc($result);

?>
<p>burger name</p>

</body>
</html>