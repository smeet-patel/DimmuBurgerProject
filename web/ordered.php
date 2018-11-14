<?php

    If(isset($_POST['newburger'])){
        if(Email == null || Email == ""){
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
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        
                // echo "Connected";
        
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
        
        
                $stmt2 = $conn->query('SELECT MAX(burgername) AS ordernumber FROM recipes');
        
                $tem = '0';
        
                while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
                     $tem = $row['ordernumber'];
                }
        
                $ordernumber = $tem;
                $suborder = $tem;
                $burger = $tem;
                $orderstate = 'new';
        
                $sql = 'INSERT INTO orders(ordernumber, subordernumber, burger, orderstate) VALUES(:ordernumber, :subordernumber, :burger, :orderstate)';
                $stmtA = $conn->prepare($sql);
                $stmtA->execute(['ordernumber' => $ordernumber, 'subordernumber' => $suborder, 'burger' => $burger, 'orderstate' => $orderstate]);
                // echo 'Order Added';        
        
                // $stmt3 = $conn->prepare("INSERT INTO orders (ordernumber, burgernumber, orderstate)
                // VALUES (:ordernumber, :burgernumber, :orderstate)");
                // $stmt3->bindParam(':ordernumber', $ordernumber);
                // $stmt3->bindParam(':burgernumber', $burgernumber);
                // $stmt3->bindParam(':orderstate', $orderstate);
        
                // $orderstate = 'new';
                // $burgernumber = '3';
                // $ordernumber = '3';
            
                // $stmt3->execute();
                // echo 'New order created successfully ';   
        
                // $stmt4 = $conn->query('SELECT * FROM orders');
                // while($row = $stmt4->fetch()){
                //     echo $row->ordernumber . '<br/>';
                // }    
        
                    
        
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }    
    }    

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title>Dimmu Burgers</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- <link rel="stylesheet" href="css/skeleton.css"> -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<!-- Favicon
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="images/png" href="images/DB.png">
</head>

<body>
	<div class="nav1" id="mynav1">
		<!--Adding My logo to the left and always showing -->
		<a href="index.php">Dimmu Burger</a>
		<!--Floating to the Left Side of the menu, the other pages-->
		<a href="order.php">Order</a>
		<!-- Shows menubutton when screen is small
		<a href="javascript:void(0);" style="font-size:15px;" class="menubutton" onclick="myFunction()">&#9776;</a> -->
	</div>
	<br>
	<!-- Primary Page Layout
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="containerWork">
		<div id="mid" style="height: auto; padding-bottom: 50px">
            <h1 id="bread" style="padding-bottom: 0.5em;">ORDER STATUS:</h1>
            <?php 
                $stmt2 = $conn->query('SELECT MAX(ordernumber) AS ordernumber FROM orders');
                while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
                    echo "<p>Your order number is: <span id=\"orNum\">" . $row['ordernumber'] . "</span> </p>";
                }            
            ?>
            <div class="container">
                <p style="font-size: 1.2em; line-height: 1.6em"><span id="output"></span></p>
            </div>            
        
	    </div>
    </div>

    <?php
        $conn = null;
    ?>

    <script>
        console.log("Ajax");
        var intervalID = window.setInterval(showSuggestion, 2000);

        function showSuggestion(){
        // AJAX REQUEST
        // create http object to create get request on certain page
        // status 200 means everything is ok.
        // ready state 4 means request is made and ready
        // var str = document.getElementById("orNum").innerHTML;

        var str = "String";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('output').innerHTML = this.responseText;
            }
        };

        xmlhttp.open("GET", "status.php?+q=", true);
        xmlhttp.send();        
        
    </script>
    <script type="text/javascript" src="javascript/script.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- <script src='javascript/bootstrap.min.js'></script> -->
	<script src='javascript/jquery.min.js'></script>
    
</body>

</html>




