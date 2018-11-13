<?php

    If(isset($_POST['newburger'])){
        try {
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

        echo "Connected";

        $stmt = $conn->prepare("INSERT INTO ingredients (paneer, tomato, lettuce)
        VALUES (:Paneer, :Tomato, :Lettuce)");
        $stmt->bindParam(':Paneer', $paneer);
        $stmt->bindParam(':Tomato', $tomato);
        $stmt->bindParam(':Lettuce', $lettuce);
    
        $paneer = $_POST['Paneer'];
        $tomato = $_POST['Tomato'];
        $lettuce = $_POST['Lettuce'];
        $stmt->execute();
        echo "New records created successfully";



    }catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    }    


?>




