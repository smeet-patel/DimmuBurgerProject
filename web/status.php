<?php
// Get Query String
    $stmt3 = $conn->query('SELECT MAX(ordernumber) AS ordernumber FROM orders');

    while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
        echo '<p>Your order number is <b>' . $row['ordernumber'] . '</b></p>';
    }
?>