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

    $q = $_REQUEST['q'];

    $m = $q;

    // $stmt3 = $conn->query('SELECT MAX(ordernumber) AS ordernumber FROM orders');

    $stats = 0;
    // $onum = 0;

    // while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
    //     $onum = $row['ordernumber'];
    // }

    $sql = 'select * from orders WHERE ordernumber = :ordernumber';
    
    // $update = $conn -> prepare($stmt4);
    // $update -> bindParam(':ordernumber', $onum);

    $stmt = $conn->prepare($sql);
    $stmt->execute(['ordernumber' => $m]);
    $stats = $stmt->fetch();

    echo "Order Number: <b>" . $m . "</b>" . "<br>Status: <b>". $stats->orderstate . "</b>"; 

?>