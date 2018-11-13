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

    require_once 'dbconfig.php';

    $db_url = parse_url(getenv("DATABASE_URL"));

    try{
        // create a PostgreSQL database connection
        $conn = new PDO($db_url);
        
        // display a message if connected to the PostgreSQL successfully
        if($conn){
        echo "Connected to the <strong>$db</strong> database successfully!";
        }
       }catch (PDOException $e){
        // report error message
        echo $e->getMessage();
       }
?>
<p>One</p>

</body>
</html>