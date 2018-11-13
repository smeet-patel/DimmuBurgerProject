<?php

    If(isset($_POST['submit'])){
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

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO recipes (tomato,lettuce,capsicum,onion,pineapple,carrot,avocado,pickles,cheddar, swiss,halloumi,paneer) 
    VALUES ('$Tomato','$Lettuce','$Capsicum','$Onion','$Pineapple','$Carrot','$Avocado','$Pickles','$Cheddar','$Swiss','$Halloumi','$Paneer')");

        $stmt->bindParam(':tomato', $Tomato);
        $stmt->bindParam(':lettuce', $Lettuce);
        $stmt->bindParam(':capsicum', $Capsicum);
        $stmt->bindParam(':onion', $Onion);
        $stmt->bindParam(':pineapple', $Pineapple);
        $stmt->bindParam(':carrot', $Carrot);
        $stmt->bindParam(':avocado', $Avocado);
        $stmt->bindParam(':pickles', $Pickles);
        $stmt->bindParam(':cheddar', $Cheddar);
        $stmt->bindParam(':swiss', $Swiss);
        $stmt->bindParam(':halloumi', $Halloumi);
        $stmt->bindParam(':paneer', $Paneer);

        $Tomato = $_POST['Tomato'];
        $Lettuce = $_POST['Lettuce'];
        $Capsicum = $_POST['Capsicum'];
        $Onion = $_POST['Onion'];
        $Pineapple = $_POST['Pineapple'];
        $Carrot = $_POST['Carrot'];
        $Avocado = $_POST['Avocado'];
        $Pickles = $_POST['Pickles'];

        $Cheddar = $_POST['Cheddar'];
        $Swiss = $_POST['Swiss'];
        $Halloumi = $_POST['Halloumi'];
        $Paneer = $_POST['Paneer'];


        $stmt->execute();


        echo "New records created successfully";
    }catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    }    


?>




