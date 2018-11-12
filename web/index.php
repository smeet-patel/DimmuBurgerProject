<?php
    $db = parse_url(getenv("DATABASE_URL"));
    $dbconnect=mysqli_connect($db);

    if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
    } else {
        echo "Connected!";
    }
?>
<p>This is the main page</p>