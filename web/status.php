<?php
// Get Query String
    $stmt3 = $conn->query('SELECT MAX(ordernumber) AS ordernumber FROM orders');

    $stat = "";

    while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
        $stat = 'Your order number is <b>' . $row['ordernumber'];
    }

    echo $stat;
?>