<?php     
    If(isset($_POST['status'])){
        echo 'status:';
        $stmt4 = $conn->query('SELECT MAX(ordernumber) AS ordernumber FROM orders');

        while($row = $stmt4->fetch(PDO::FETCH_ASSOC)){
            echo '<p>Your order status is <b>' . $row['orderstatus'] . '</b></p>';
        }
    }

    $conn = null;
?>