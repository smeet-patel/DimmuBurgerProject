<?php
// Get Query String
    $db = parse_url(getenv("DATABASE_URL"));

    $conn = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



    $stmt3 = $conn->query('SELECT MAX(ordernumber) AS ordernumber FROM orders');

    $stats = "";
    $onum = "";

    while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
        $onum = $row['ordernumber'];
    }



    $stmt4 = 'select orderstate as orderstate from orders WHERE ordernumber = :ordernumber';
    
    $update = $conn -> prepare($stmt4);
    $update -> bindParam(':ordernumber', $onum);

    while($row = $update->fetch(PDO::FETCH_ASSOC)){
        $stats = $row['orderstate'];
    }


    echo "Order Number: " . $onum . "<br>Status: ". $stats; 

?>