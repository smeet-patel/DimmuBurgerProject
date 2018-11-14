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

    $post = "a";
    $onum = "";

    while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
        $onum = $row['ordernumber'];
    }


    // $stmt4 = $conn->query('SELECT orderstate AS orderstate FROM orders WHERE (ordernumber = :ordernumber)');
    $sql = 'SELECT orderstate FROM orders WHERE ordernumber = ?';
    $stmt4 = $pdo->prepare($sql);
    $stmt4->execute([$onum]);
    $posts = $stmt4->fetchAll();



    echo $posts;
?>