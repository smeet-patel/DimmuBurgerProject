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

        $stmt = $conn->prepare("INSERT INTO recipes (burgerbun, junior, wrap, chicken, beef, falafel, tofu, paneer, tomato, lettuce, capsicum, onion, pineapple, carrot, avocado, pickles, cheddar, swiss, halloumi, tomatosauce, curry, italian, aioli, mayo)
        VALUES (:burgerbun, :junior, :wrap, :chicken, :beef, :falafel, :tofu, :paneer, :tomato, :lettuce, :capsicum, :onion, :pineapple, :carrot, :avocado, :pickles, :cheddar, :swiss, :halloumi, :tomatosauce, :curry, :italian, :aioli, :mayo)");
        $stmt->bindParam(':paneer', $Paneer);
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

        $stmt->bindParam(':burgerbun', $Burger);
        $stmt->bindParam(':junior', $JrBurger);
        $stmt->bindParam(':wrap', $wrap);

        $stmt->bindParam(':chicken', $Chicken);
        $stmt->bindParam(':beef', $Beef);
        $stmt->bindParam(':falafel', $Falafel);
        $stmt->bindParam(':tofu', $Tofu);        

        $stmt->bindParam(':tomatosauce', $tomatosauce);
        $stmt->bindParam(':curry', $Curry);
        $stmt->bindParam(':italian', $Italian);
        $stmt->bindParam(':aioli', $Aioli);
        $stmt->bindParam(':mayo', $Mayonnaise); 

        $Paneer = $_POST['Paneer'];
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

        $radioVal = $_POST["Bread"];

        if ($radioVal==Burger){
            $Burger = "1";
        }elseif($radioVal==JrBurger){
            $JrBurger = "1";
        }elseif($radioVal==Tortillas){
            $wrap = "1";
        }

        $radioVal2 = $_POST["Base"];

        if ($radioVal2==Chicken){
            $Chicken = "1";
        }elseif($radioVal2==Beef){
            $Beef = "1";
        }elseif($radioVal2==Falafel){
            $Falafel = "1";
        }elseif($radioVal2==Tofu){
            $Tofu = "1";
        }

        $checkVal = $_POST["Sauce"];
        $checkVal1 = $_POST["Sauce1"];
        $checkVal2 = $_POST["Sauce2"];
        $checkVal3 = $_POST["Sauce3"];
        $checkVal4 = $_POST["Sauce4"];
        if ($checkVal==tomatosauce){
            $tomatosauce = "1";
        }
        if($checkVal1==Curry){
            $Curry = "1";
        }
        if($checkVal2==Italian){
            $Italian = "1";
        }
        if($checkVal3==Aioli){
            $Aioli= "1";
        }
        if($checkVal4==Mayonnaise){
            $Mayonnaise = "1";
        }


        $stmt->execute();
        echo "New records created successfully";


        $sql = 'SELECT MAX(burgername) FROM recipes';
        $st = $pdo->prepare($sql);
        $st->execute(['ordernumber' => $ordernumber]);
        $post = $st->fetch();


        $stm = $conn->prepare("INSERT INTO orders (ordernumber, burger, orderstate)
        VALUES (:ordernumber, :burger, :orderstate)");
        $stm->bindParam(':ordernumber', $ordernumber);
        $stm->bindParam(':burger', $ordernumber);
        $stm->bindParam(':orderstate', $orderstate);
    
        $orderstate = "new";

        $stm->execute();
        echo "Order: " + $ordernumber + " " + $orderstate;


    }catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    }    

?>





