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
	<br/>
	<!-- </div> -->
	<div class="containerWork">
		<div id="mid">
			<h1 id="bread" style="padding-bottom: 0.5em;">ORDER BURGER</h1>
			<!-- Bread
			    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<h2 class="w">Bread</h2>
			<form action="ordered.php" method="post">
				<table id="custom">
					<tr id="Hov">
						<td width="15%">
							<div class="cen"><img src="ingredients_icons/breads/bun.png" class="icon"></div>
						</td>
						<td>
							<div class="cenform">
								<label class="conradio" >Burger
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
								<label class="conradio" > Jr Burger
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
								<label class="conradio" >Tortillas
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
									<label class="conradio" >Chicken
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
									<label class="conradio" >Beef
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
									<label class="conradio" >Falafel
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
									<label class="conradio" >Vege Tofu
										<input type="radio" name="Base" value="Tofu" onclick="mybase()" id="radio7">
										<span class="checkradio"></span>
									</label>
								</div>
							</td>
							<td width="25%"><span id="ptof"></span></td>
						</tr>
						<tr id="Hov">
							<td>
							</td>
							<td>
								<div class="cenform">
									<label class="conradio" style="font-size:1em; color: #F90036">NONE
										<input type="radio" name="Base" value="skip" onclick="mybase()" id="radio8">
										<span class="checkradio"></span>
									</label>
								</div>
							</td>
							<td width="25%"></td>
						</tr>
					</table>
					<!-- <button class="btnSub1" onclick="skipbase()">Skip</button> -->
					<!-- <hr> -->
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
									<div class="slidecontainer">
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
									<div class="slidecontainer">
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
									<div class="slidecontainer">
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
									<div class="slidecontainer">
										<input type="range" min="0" max="2" value="0" class="slider" id="mypan" name="Paneer">
									</div>
								</div>
							</td>
							<td width="30%">
								<div class="cen">Paneer <span id="pan"></span> </div>
							</td>
							<td width="25%"><span id="ppan"></span></td>
						</tr>
						<tr id="Hov">
							<td>
							</td>
							<td colspan="2">
								<div class="cenform">
									<label class="conradio" style="font-size:1em; color: #F90036;">NONE
										<input type="radio" name="" value="skip" onclick="skipchee()" id="radio9">
										<span class="checkradio"></span>
									</label>
								</div>
							</td>
							<td width="25%"></td>
						</tr>
					</table>
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
								<div class="cen"><img src="ingredients_icons/produce/pickel.png" class="icon"></div>
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
						<tr id="Hov">
							<td>
							</td>
							<td colspan="2">
								<div class="cenform">
									<label class="conradio" style="font-size:1em; color: #F90036;">NONE
										<input type="radio" name="" value="skip" onclick="skipvege()" id="radio10">
										<span class="checkradio"></span>
									</label>
								</div>
							</td>
							<td width="25%"></td>
						</tr>
					</table>
					<!-- <button class="btnSub1" onclick="skipvege()">Skip</button> -->
					<hr>
				</div>
				<!-- Sauce
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<div id="sauceshow" style="display: none">
					<h2 class="w">Sauce</h2>
					<table id="custom">
						<tr id="Hov">
							<td width="15%">
								<div class="cen"><img src="ingredients_icons/sauce/mayo_sau.png" class="icon"></div>
							</td>
							<td>
								<div class="cenform">
									<label class="conform" >Mayonnaise
										<input type="checkbox" name="Sauce4" value="Mayonnaise" onclick="mayoT()" id="mayo">
										<span class="checkmark"></span>
									</label>
								</div>
							</td>
							<td width="25%"><span id="pmayo"></span></td>
						</tr>
						<tr id="Hov">
							<td width="15%">
								<div class="cen"><img src="ingredients_icons/sauce/ali_sau.png" class="icon"></div>
							</td>
							<td>
								<div class="cenform">
									<label class="conform" >
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
								<div class="cen"><img src="ingredients_icons/sauce/curry_sau.png" class="icon"></div>
							</td>
							<td>
								<div class="cenform">
									<label class="conform" >Curry Sauce
										<input type="checkbox" name="Sauce1" value="Curry" onclick="curryT()" id="curry">
										<span class="checkmark"></span>
									</label>
								</div>
							</td>
							<td width="25%"><span id="pcurry"></span></td>
						</tr>
						<tr id="Hov">
							<td width="15%">
								<div class="cen"><img src="ingredients_icons/sauce/ita_sau.png" class="icon"></div>
							</td>
							<td>
								<div class="cenform">
									<label class="conform" >Italian Dressing
										<input type="checkbox" name="Sauce2" value="Italian" onclick="itaT()" id="ita">
										<span class="checkmark"></span>
									</label>
								</div>
							</td>
							<td width="25%"><span id="pita"></span></td>
						</tr>
						<tr id="Hov">
							<td width="15%">
								<div class="cen"><img src="ingredients_icons/sauce/tom_sau.png" class="icon"></div>
							</td>
							<td>
								<div class="cenform">
									<label class="conform" >Tomato Sauce
										<input type="checkbox" name="Sauce" value="tomatosauce" onclick="hotcT()" id="hotc">
										<span class="checkmark"></span>
									</label>
								</div>
							</td>
							<td width="25%"><span id="photc"></span></td>
						</tr>
						<tr id="Hov">
							<td>
							</td>
							<td>
								<div class="cenform">
									<label class="conradio" style="font-size:1em; color: #F90036">NONE
										<input type="radio" name="" value="skip" onclick="skipsau()" id="radio10">
										<span class="checkradio"></span>
									</label>
								</div>
							</td>
							<td width="25%"></td>
						</tr>
					</table>
				</div>
				<br>
				<div id="subhide" style="display: none;">
					<table id="custom noHov">
						<!-- <tr>
							<td>
								<div class="cen"><button class="btnSub" id="Order" name="">Order Another Burger</button></div>
							</td>
						</tr> -->
						<tr>
							<td>
								<div class="cen">
									<input type="email" class="loginInput" name="Email" placeholder="Email" />
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<!-- <input type="radio" name="1" value="1" id="radio1" style="display: none"> -->
								<div class="cen"><input type="submit" class="btnSub" name="newburger" value="Proceed with order"
									onclick="finalsubmit()"/></div>
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
