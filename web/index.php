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
    $db_url = getenv("DATABASE_URL");
    //echo "$db_url\n";

    // $db = pg_connect($db_url); 
    $db = new PDO($db_url);
    if($db) {echo "connected";} else {echo "not connected";}



?>
<p>This is the main page</p>
<p>burger name</p>
<?php
    $selectSql = "SELECT * from recipes";
    $result =  pg_query($db, $selectSql);

    while ($row = pg_fetch_row($result)) {
        var_dump($row);
    }

?>

</body>
</html>