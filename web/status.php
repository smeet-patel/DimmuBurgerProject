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


    $sql = 'SELECT * FROM orders WHERE orderstate = :orderstate';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['ordernumber' => $onum]);
    $post = $stmt->fetch();
    echo $post->orderstate;


?>