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
    // $db_url = getenv("DATABASE_URL") ?: "postgres://user:pass@host:port/dbname";
    // echo "$db_url\n";

    // $db = pg_connect($db_url);
    // if($db) {echo "connected";} else {echo "not connected";}

    // $selectSql = "SELECT ingredient FROM ingredients";
    // $result =  pg_query($db, $selectSql);

    // while ($row = pg_fetch_row($result)) {
    //     var_dump($row);
    // }
    $db = parse_url(getenv("DATABASE_URL"));

    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $stmt = $pdo->query('SELECT * FROM ingredients');

    while($row = $stmt->fetch()){
       echo $row->ingredient . '<br/>';
    }    

    $stmt = $conn->prepare("INSERT INTO recipes (category, ingredient, quantityinstock, restocklevel, price) 
    VALUES (:category, :ingredient, :quantityinstock, restocklevel, price)");
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':ingredient', $ingredient);
        $stmt->bindParam(':quantityinstock', $quantityinstock);
        $stmt->bindParam(':restocklevel', $restocklevel);
        $stmt->bindParam(':price', $price);
    
    // insert a row
        $category = $_POST["category"];
        $ingredient = $_POST["ingredient"];
        $quantityinstock = $_POST["quantityinstock"];
        $restocklevel = $_POST["restocklevel"];
        $price = $_POST["price"];
        $stmt->execute();
    
    
        echo "New records created successfully";


?>

<html>
<body>

<form action="index.php" method="post">
    category: <input type="text" name="category"><br>
    ingredient: <input type="text" name="ingredient"><br>
    quantity in stock: <input type="text" name="quantityinstock"><br>
    restock level: <input type="text" name="restocklevel"><br>
    price: <input type="text" name="price"><br>
    <input type="submit">
</form>

</body>
</html>