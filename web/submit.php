<?php
	// need user name, pass word  and database name.
        $db = getenv("DATABASE_URL");
		if (isset($_POST['newburger']))
		{

			// create table recipes (burgername int AUTO_INCREMENT, burgerbun int, junior int, wrap int, chicken int, beef int, falafel int, tofu int, cheddar int, swiss int, halloumi int, paneer int, tomato int, lettuce int, capsicum int,onion int, pineapple int, carrot int,avocado int, pickles int,tomatosauce int, curry int, italian int, aioli int, mayo int, PRIMARY KEY (burgername));
			
			//echo "Good connection";
			//posting the fields and connect it up to the table attribute
			$Tomato = mysqli_escape_string($db,$_POST['Tomato']);
			$Lettuce = mysqli_escape_string($db,$_POST['Lettuce']);
			$Capsicum = mysqli_escape_string($db,$_POST['Capsicum']);
			$Onion = mysqli_escape_string($db,$_POST['Onion']);
			$Pineapple = mysqli_escape_string($db,$_POST['Pineapple']);
			$Carrot = mysqli_escape_string($db,$_POST['Carrot']);
			$Avocado = mysqli_escape_string($db,$_POST['Avocado']);
			$Pickles = mysqli_escape_string($db,$_POST['Pickles']);

			$Cheddar = mysqli_escape_string($db,$_POST['Cheddar']);
			$Swiss = mysqli_escape_string($db,$_POST['Swiss']);
			$Halloumi = mysqli_escape_string($db,$_POST['Halloumi']);
			$Paneer = mysqli_escape_string($db,$_POST['Paneer']);

			$radioVal = $_POST["Bread"];

			if ($radioVal==Burger){
				// echo "burger 1";
				$Burger =mysqli_escape_string($db,"1");
			}elseif($radioVal==JrBurger){
				// echo "jr burger 2";
				$JrBurger =mysqli_escape_string($db,"1");
			}elseif($radioVal==Tortillas){
				// echo "wrap 3";
				$wrap =mysqli_escape_string($db,"1");
			}

			$radioVal2 = $_POST["Base"];

			if ($radioVal2==Chicken){
				// echo "burger 1";
				$Chicken =mysqli_escape_string($db,"1");
			}elseif($radioVal2==Beef){
				// echo "jr burger 2";
				$Beef =mysqli_escape_string($db,"1");
			}elseif($radioVal2==Falafel){
				// echo "wrap 3";
				$Falafel =mysqli_escape_string($db,"1");
			}elseif($radioVal2==Tofu){
				// echo "wrap 3";
				$Tofu =mysqli_escape_string($db,"1");
			}

			$checkVal = $_POST["Sauce"];
			$checkVal1 = $_POST["Sauce1"];
			$checkVal2 = $_POST["Sauce2"];
			$checkVal3 = $_POST["Sauce3"];
			$checkVal4 = $_POST["Sauce4"];
			if ($checkVal==tomatosauce){
				// echo "burger 1";
				$tomatosauce =mysqli_escape_string($db,"1");
			}
			if($checkVal1==Curry){
				// echo "jr burger 2";
				$Curry =mysqli_escape_string($db,"1");
			}
			if($checkVal2==Italian){
				// echo "wrap 3";
				$Italian =mysqli_escape_string($db,"1");
			}
			if($checkVal3==Aioli){
				// echo "wrap 3";
				$Aioli=mysqli_escape_string($db,"1");
			}
			if($checkVal4==Mayonnaise){
				// echo "wrap 3";
				$Mayonnaise =mysqli_escape_string($db,"1");
			}
			
			// $db->query("INSERT INTO  recipes(burgername, burgerbun, junior, wrap, chicken, beef,falafel,tofu,cheddar,swiss,halloumi,paneer,tomato,avocado,pickles,tomatosauce, curry,italian, aioli, mayo) 
			$db->query("INSERT INTO  recipes(tomato,lettuce,capsicum,onion,pineapple,carrot,avocado,pickles,cheddar, swiss,halloumi,paneer, burgerbun, junior, wrap,chicken, beef,falafel,tofu,tomatosauce, curry,italian, aioli, mayo) 
			VALUES ('$Tomato','$Lettuce','$Capsicum','$Onion','$Pineapple','$Carrot','$Avocado','$Pickles','$Cheddar','$Swiss','$Halloumi','$Paneer','$Burger','$JrBurger','$wrap','$Chicken','$Beef','$Falafel','$Tofu','$tomatosauce','$Curry','$Italian','$Aioli','$Mayonnaise')");

			// $db->query("INSERT INTO Comments(name, comment, email) VALUES ('$Base', '$Cheddar','$Tomato')");
			// $db->query("INSERT INTO Comments(name, comment, email) VALUES ('$Pname', '$comment', '$CommentingEmail')");
		}
		// else {echo "Errrrrrrror";}
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
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<!-- Favicon
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="images/DB.png">
</head>

<body>
	<div class="nav1" id="mynav1">
		<!--Adding My logo to the left and always showing -->
		<a href="index.html"><img src="images/dimmulogo.png" height="40"></a>
		<!--Floating to the Left Side of the menu, the other pages-->
		<a href="submit.php">Order</a>
		<!--Shows menubutton when screen is small -->
		<a href="javascript:void(0);" style="font-size:15px;" class="menubutton" onclick="myFunction()">&#9776;</a>
	</div>
	<br>
	<!-- Primary Page Layout
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="sticky">
		<!-- <div class="sticky"> -->
		<table style="text-align:center;">
			<Tr>
				<!-- <Td class="sideProgress"><button class="btn" id="Back" href="https://www.google.com">&lt;</button></td> -->
				<td>
					<ul id="progress-bar" class="progressbar">
						<!-- <a href="#bread"> -->
						<li class="active">Bread</li>
						<!-- </a> -->
						<!-- <a href="#base1"> -->
						<li>Base</li>
						<!-- </a> -->
						<li>Cheese</li>
						<li>Vegetable</li>
						<li>Sauce</li>
					</ul>
				</td>
			<tr>
				<td class="totalrow">
					<div class="cen">Total Price <span id="totalPrice"></span></div>
				</td>
			</tr>
			<!-- <Td class="sideProgress"><a href="#google"><button class="btn" onclick="change()" id="Next">&gt;</button></a></td> -->
			</tr>
		</table>
	</div>
	<!-- </div> -->
	<div class="containerWork">
		<div id="mid">
			<h1 id="bread">ORDER BURGER</h1>
			<!-- Bread
			    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<h2 class="w">Bread</h2>
			<form action="submit.php" method="post">
			<table id="custom">
				<tr id="Hov">
					<td width="15%">
						<div class="cen"><img src="ingredients_icons/breads/bun.png" class="icon"></div>
					</td>
					<td>
						<div class="cenform">
							<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Burger
								<input type="radio" name="Bread" value="Burger" onclick="mybread()" id="radio1">
								<span class="checkradio"></span>
							</label>
						</div>
					</td>
					<td width="25%"><span id="pbur"></span></td>
				</tr>
				<tr id="Hov">
					<td width="15%">
						<div class="cen"><img src="ingredients_icons/breads/junior_bun.png" class="icon"></div>
					</td>
					<td id="base1">
						<div class="cenform">
							<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);"> Jr Burger
								<input type="radio" name="Bread" value="JrBurger" onclick="mybread()" id="radio2">
								<span class="checkradio"></span>
							</label>
						</div>
					</td>
					<td width="25%"><span id="pjrbur"></span></td>
				</tr>
				<tr id="Hov">
					<td width="15%">
						<div class="cen"><img src="ingredients_icons/breads/tortillas.png" class="icon"></div>
					</td>
					<td>
						<div class="cenform">
							<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Tortillas
								<input type="radio" name="Bread" value="Tortillas" onclick="mybread()" id="radio3">
								<span class="checkradio"></span>
							</label>
						</div>
					</td>
					<td width="25%"><span id="pwra"></span></td>
				</tr>
			</table>
			<!-- Base Protein
			    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<div id="baseshow" style="display: none">
				<h2 class="w">Base Protein</h2>
				<table id="custom">
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/bases/chicken.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Chicken
									<input type="radio" name="Base" value="Chicken" onclick="mybase()" id="radio4">
									<span class="checkradio"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="pchi"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/bases/meat.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Beef
									<input type="radio" name="Base" value="Beef" onclick="mybase()" id="radio5">
									<span class="checkradio"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="pmea"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/bases/falafel.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Falafel
									<input type="radio" name="Base" value="Falafel" onclick="mybase()" id="radio6">
									<span class="checkradio"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="pfal"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/bases/tofu.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conradio" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Vege Tofu
									<input type="radio" name="Base" value="Tofu" onclick="mybase()" id="radio7">
									<span class="checkradio"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="ptof"></span></td>
					</tr>
				</table>
				<button class="btnSub1" onclick="skipbase()">Skip</button>
				<hr>
			</div>
			<!-- Cheese
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<div id="cheeseshow" style="display: none">
				<h2 class="w">Cheese</h2>
				<table id="custom">
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/cheeses/cheese.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="""slidecontainer">
									<input type="range" min="0" max="2" value="0" class="slider" id="myche" name="Cheddar">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Cheddar <span id="che"></span> </div>
						</td>
						<td width="25%"><span id="pche"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/cheeses/cheese (1).png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="""slidecontainer">
									<input type="range" min="0" max="2" value="0" class="slider" id="myswi" name="Swiss">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Swiss <span id="swi"></span> </div>
						</td>
						<td width="25%"><span id="pswi"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/cheeses/halloumi.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="""slidecontainer">
									<input type="range" min="0" max="2" value="0" class="slider" id="myhal" name="Halloumi">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Halloumi <span id="hal"></span> </div>
						</td>
						<td width="25%"><span id="phal"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/cheeses/paneer.jpg" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="""slidecontainer">
									<input type="range" min="0" max="2" value="0" class="slider" id="mypan" name="Paneer">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Paneer <span id="pan"></span> </div>
						</td>
						<td width="25%"><span id="ppan"></span></td>
					</tr>
				</table>
				<button class="btnSub1" onclick="skipchee()">Skip</button>
				<hr>
			</div>
			<!-- Vegetable
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<div id="vegeshow" style="display: none">
				<h2 class="w">Vegetable</h2>
				<table id="custom">
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/tomato.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myTomato" name="Tomato">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Tomato <span id="Tomato"></span> </div>
						</td>
						<td width="25%"><span id="ptom"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/lettuce.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myLettuce" name="Lettuce">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Lettuce <span id="Lettuce"></span> </div>
						</td>
						<td width="25%"><span id="plet"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/capsicum.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myCapsicum" name="Capsicum">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Capsicum <span id="Capsicum"></span> </div>
						</td>
						<td width="25%"><span id="pcap"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/onion.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myOnion" name="Onion">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Onion <span id="Onion"></span> </div>
						</td>
						<td width="25%"><span id="poni"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/carrot.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myCarrot" name="Carrot">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Carrot <span id="Carrot"></span> </div>
						</td>
						<td width="25%"><span id="pcar"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/extras/pineapple.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myPineapple" name="Pineapple">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Pineapple <span id="Pineapple"></span> </div>
						</td>
						<td width="25%"><span id="ppin"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/extras/avocado.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myAvocado" name="Avocado">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Avocado <span id="Avocado"></span> </div>
						</td>
						<td width="25%"><span id="pavo"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/extras/pineapple.png" class="icon"></div>
						</td>
						<td width="30%">
							<div class="cen">
								<div class="slidecontainer">
									<input type="range" min="0" max="3" value="0" class="slider" id="myPickles" name="Pickles">
								</div>
							</div>
						</td>
						<td width="30%">
							<div class="cen">Pickles <span id="Pickles"></span> </div>
						</td>
						<td width="25%"><span id="ppic"></span></td>
					</tr>
				</table>
				<button class="btnSub1" onclick="skipvege()">Skip</button>
				<hr>
			</div>
			<!-- Sauce
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<div id="sauceshow" style="display: none">
				<h2 class="w">Sauce</h2>
				<table id="custom">
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/tomato.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conform" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Mayonnaise
									<input type="checkbox" name="Sauce4" value="Mayonnaise" onclick="mayoT()" id="mayo">
									<span class="checkmark"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="pmayo"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/tomato.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conform" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">
									<p>Aioli</p>
									<input type="checkbox" name="Sauce3" value="Aioli" onclick="aioliT()" id="aioli">
									<span class="checkmark"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="paioli"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/tomato.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conform" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Curry Sauce
									<input type="checkbox" name="Sauce1" value="Curry" onclick="curryT()" id="curry">
									<span class="checkmark"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="pcurry"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/tomato.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conform" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Italian Dressing
									<input type="checkbox" name="Sauce2" value="Italian" onclick="itaT()" id="ita">
									<span class="checkmark"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="pita"></span></td>
					</tr>
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/produce/tomato.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conform" style="font-size:calc(12px + 1.5vw);top:calc(1vw);">Tomato Sauce
									<input type="checkbox" name="Sauce" value="tomatosauce" onclick="hotcT()" id="hotc">
									<span class="checkmark"></span>
								</label>
							</div>
						</td>
						<td width="25%"><span id="photc"></span></td>
					</tr>
					<hr>
				</table>
				<button class="btnSub1" onclick="skipsau()">No Sauce</button>
			</div>
			<!-- <table id="custom">
				<tr>
					<td style="color:red">Total</td>
					<td>Quantity</td>
					<td>Price</td>
				</tr>
			</table> -->
			<br>
			<div id="subhide" style="display: none;">
				<table id="custom noHov">
					<tr>
						<td>
							<div class="cen"><button class="btnSub" id="Order" name="">Proceed with order</button></div>
						</td>
					</tr>
					<tr>
						<td>
						<!-- <input type="radio" name="1" value="1" id="radio1" style="display: none"> -->
						<input type="submit" class="btnSub" name="newburger" value="Order Another Burger 1" />
							<!-- <div class="cen"><button class="btnSub" id="Another">Order Another Burger</button></div> -->
						</td>
					</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- <script src='javascript/bootstrap.min.js'></script> -->
	<script src='javascript/jquery.min.js'></script>
	<script src="javascript/script.js"></script>
</body>

</html>
