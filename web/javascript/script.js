var sauce$ = .2;
var jrburger$ = 2.5;
var wrap$ = 3;
var burger$ = 4;
var chi$ = 3.5;
var mea$ = 3;
var fal$ = 2;
var tof$ = 1.5;
var cheese$ = 1;

var Bread = false;
var countBread = 0;

function NextBread() {
  if (Bread == true && countBread == 1) {
    progressBar.Next();
  }
}

function NextBase() {
  if (Base == true && countBase == 1) {
    progressBar.Next();
  }
}

function Nextchee() {
  if (chee == true && countchee == 1) {
    progressBar.Next();
  }
}

function Nextvege() {
  
  if (vege == true && countvege == 1) {
    saucesdisplay();
    progressBar.Next();
  }
}

function Nextsauce() {
  if (vege == true && countvege == 1) {
    subsdisplay();
    progressBar.Next();
  }
}

var progressBar = {
  Bar: $('#progress-bar'),
  Reset: function () {
    if (this.Bar) {
      this.Bar.find('li').removeClass('active');
    }
  },
  Next: function () {
    $('#progress-bar li:not(.active):first').addClass('active');
  },
  Back: function () {
    $('#progress-bar li.active:last').removeClass('active');
  }
}

progressBar.Reset();


$("#Next").on('click', function () {
  progressBar.Next();
})
$("#Back").on('click', function () {
  progressBar.Back();
})
$("#Reset").on('click', function () {
  progressBar.Reset();
})


//Bread price ------------------------------
//---------------------
var radio1 = document.getElementById("radio1");
var radio2 = document.getElementById("radio2");
var radio3 = document.getElementById("radio3");
var price18 = document.getElementById("pbur");
var pp18 = 0;
var price19 = document.getElementById("pjrbur");
var pp19 = 0;
var price20 = document.getElementById("pwra");
var pp20 = 0;

function mybread() {
  if (radio1.checked == true) {
    price18.innerHTML = "$" + (burger$).toFixed(2);
    pp18 = (burger$);
    price19.innerHTML = "";
    pp19 = 0;
    price20.innerHTML = "";
    pp20 = 0;
  } else if (radio2.checked == true) {
    price19.innerHTML = "$" + (jrburger$).toFixed(2);
    pp19 = (jrburger$);
    price18.innerHTML = "";
    pp18 = 0;
    price20.innerHTML = "";
    pp20 = 0;
  } else if (radio3.checked == true) {
    price20.innerHTML = "$" + (wrap$).toFixed(2);
    pp20 = (wrap$);
    price18.innerHTML = "";
    pp18 = 0;
    price19.innerHTML = "";
    pp19 = 0;
  }
  totalp();
  Bread = true;
  countBread = countBread + 1;
  NextBread();
  basedisplay();
}

var baseshow = document.getElementById("baseshow");

function basedisplay() {
  baseshow.style.display = "block";
}

function skipbase() {
  cheesedisplay();
  Base = true;
  countBase = countBase + 1;
  NextBase();
}

function skipchee() {
  vegedisplay();
  chee = true;
  countchee = countchee + 1;
  Nextchee();
}

function skipvege() {
  saucesdisplay();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

function skipsau() {
  subsdisplay();
  sauce = true;
  countsauce = countsauce + 1;
  Nextsauce();
}

var cheeseshow = document.getElementById("cheeseshow");

function cheesedisplay() {
  cheeseshow.style.display = "block";
}

var vegeshow = document.getElementById("vegeshow");

function vegedisplay() {
  vegeshow.style.display = "block";
}

var sauceshow = document.getElementById("sauceshow");

function saucesdisplay() {
  sauceshow.style.display = "block";
}

var subhide = document.getElementById("subhide");

function subsdisplay() {
  subhide.style.display = "block";
}


var radio4 = document.getElementById("radio4");
var radio5 = document.getElementById("radio5");
var radio6 = document.getElementById("radio6");
var radio7 = document.getElementById("radio7");
var price21 = document.getElementById("pchi");
var pp21 = 0;
var price22 = document.getElementById("pmea");
var pp22 = 0;
var price23 = document.getElementById("pfal");
var pp23 = 0;
var price24 = document.getElementById("ptof");
var pp24 = 0;
var Base = false;
var countBase = 0;

function mybase() {
  if (radio4.checked == true) {
    price21.innerHTML = "$" + (chi$).toFixed(2);
    pp21 = (chi$);
    price22.innerHTML = "";
    pp22 = 0;
    price23.innerHTML = "";
    pp23 = 0;
    price24.innerHTML = "";
    pp24 = 0;
  } else if (radio5.checked == true) {
    price22.innerHTML = "$" + (mea$).toFixed(2);
    pp22 = (mea$);
    price21.innerHTML = "";
    pp21 = 0;
    price23.innerHTML = "";
    pp23 = 0;
    price24.innerHTML = "";
    pp24 = 0;
  } else if (radio6.checked == true) {
    price23.innerHTML = "$" + (fal$).toFixed(2);
    pp23 = (fal$);
    price21.innerHTML = "";
    pp21 = 0;
    price22.innerHTML = "";
    pp22 = 0;
    price24.innerHTML = "";
    pp24 = 0;
  } else if (radio7.checked == true) {
    price24.innerHTML = "$" + (tof$).toFixed(2);
    pp24 = (tof$);
    price21.innerHTML = "";
    pp21 = 0;
    price22.innerHTML = "";
    pp22 = 0;
    price23.innerHTML = "";
    pp23 = 0;
  }
  totalp();
  Base = true;
  countBase = countBase + 1;
  NextBase();
  cheesedisplay();
}



var checkBox1 = document.getElementById("mayo");
var price13 = document.getElementById("pmayo");
var pp13 = 0;
var sauce = false;
var countsauce = 0;

function mayoT() {
  if (checkBox1.checked == true) {
    price13.innerHTML = "$" + (sauce$).toFixed(2);
    pp13 = (sauce$);
  } else {
    price13.innerHTML = "";
    pp13 = 0;
  }
  totalp();
  countsauce = countsauce + 1;
  Nextsauce();
  subsdisplay();
}

var checkBox2 = document.getElementById("aioli");
var price14 = document.getElementById("paioli");
var pp14 = 0;

function aioliT() {
  if (checkBox2.checked == true) {
    price14.innerHTML = "$" + (sauce$).toFixed(2);
    pp14 = (sauce$);
  } else {
    price14.innerHTML = "";
    pp14 = 0;
  }
  totalp();
  countsauce = countsauce + 1;
  Nextsauce();
  subsdisplay();
}

var checkBox3 = document.getElementById("curry");
var price15 = document.getElementById("pcurry");
var pp15 = 0;

function curryT() {
  if (checkBox3.checked == true) {
    price15.innerHTML = "$" + (sauce$).toFixed(2);
    pp15 = (sauce$);
  } else {
    price15.innerHTML = "";
    pp15 = 0;
  }
  totalp();
  countsauce = countsauce + 1;
  Nextsauce();
  subsdisplay();
}

var checkBox4 = document.getElementById("hotc");
var price16 = document.getElementById("photc");
var pp16 = 0;

function hotcT() {
  if (checkBox4.checked == true) {
    price16.innerHTML = "$" + (sauce$).toFixed(2);
    pp16 = (sauce$);
  } else {
    price16.innerHTML = "";
    pp16 = 0;
  }
  totalp();
  countsauce = countsauce + 1;
  Nextsauce();
  subsdisplay();
}

var checkBox5 = document.getElementById("ita");
var price17 = document.getElementById("pita");
var pp17 = 0;

function itaT() {
  if (checkBox5.checked == true) {
    price17.innerHTML = "$" + (sauce$).toFixed(2);
    pp17 = (sauce$);
  } else {
    price17.innerHTML = "";
    pp17 = 0;
  }
  totalp();
  countsauce = countsauce + 1;
  Nextsauce();
  subsdisplay();
}

var slider1 = document.getElementById("myche");
var output1 = document.getElementById("che");
var price1 = document.getElementById("pche");
var pp1 = 0;
var chee = false;
var countchee = 0;
output1.innerHTML = slider1.value; // Display the default slider value
// Update the current slider value (each time you drag the slider handle)
slider1.oninput = function () {
  output1.innerHTML = this.value;
  if (this.value > 0) {
    price1.innerHTML = "$" + (this.value * 1.5 - .5).toFixed(2);
    pp1 = this.value * 1.5 - .5.toFixed(2);
  } else {
    price1.innerHTML = "";
    pp1 = 0
  }
  totalp();
  cheesecheck();
  chee = true;
  countchee = countchee + 1;
  Nextchee();
}

var slider2 = document.getElementById("myswi");
var output2 = document.getElementById("swi");
var price2 = document.getElementById("pswi");
var pp2 = 0;
output2.innerHTML = slider2.value;
slider2.oninput = function () {
  output2.innerHTML = this.value;
  if (this.value > 0) {
    price2.innerHTML = "$" + (this.value * 1.5 - .5).toFixed(2);
    pp2 = this.value * 1.5 - .5.toFixed(2);
  } else {
    price2.innerHTML = "";
    pp2 = 0;
  }
  totalp();
  cheesecheck();
  chee = true;
  countchee = countchee + 1;
  Nextchee();
}

var slider3 = document.getElementById("myhal");
var output3 = document.getElementById("hal");
var price3 = document.getElementById("phal");
var pp3 = 0;
output3.innerHTML = slider3.value;
slider3.oninput = function () {
  output3.innerHTML = this.value;
  if (this.value > 0) {
    price3.innerHTML = "$" + (this.value * 1.5 - .5).toFixed(2);
    pp3 = this.value * 1.5 - .5.toFixed(2);
  } else {
    price3.innerHTML = "";
    pp3 = 0;
  }
  totalp();
  cheesecheck();
  chee = true;
  countchee = countchee + 1;
  Nextchee();
}

var slider4 = document.getElementById("mypan");
var output4 = document.getElementById("pan");
var price4 = document.getElementById("ppan");
var pp4 = 0;
output4.innerHTML = slider4.value;
slider4.oninput = function () {
  output4.innerHTML = this.value;
  if (this.value > 0) {
    price4.innerHTML = "$" + (this.value * 1.5 - .5).toFixed(2);
    pp4 = this.value * 1.5 - .5.toFixed(2);
  } else {
    price4.innerHTML = "";
    pp4 = 0;
  }
  totalp();
  cheesecheck();
  chee = true;
  countchee = countchee + 1;
  Nextchee();
}

function cheesecheck() {
  if (pp1 > 0 || pp2 > 0 || pp3 > 0 || pp4 > 0) {
    vegedisplay();
  }
}

var slider5 = document.getElementById("myTomato");
var output5 = document.getElementById("Tomato");
var price5 = document.getElementById("ptom");
var pp5 = 0;
var vege = false;
var countvege = 0;
output5.innerHTML = slider5.value;
slider5.oninput = function () {
  output5.innerHTML = this.value;
  if (this.value == 1) {
    price5.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp5 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price5.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp5 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price5.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp5 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price5.innerHTML = "";
    pp5 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider6 = document.getElementById("myLettuce");
var output6 = document.getElementById("Lettuce");
var price6 = document.getElementById("plet");
var pp6 = 0;
output6.innerHTML = slider6.value;
slider6.oninput = function () {
  output6.innerHTML = this.value;
  if (this.value == 1) {
    price6.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp6 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price6.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp6 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price6.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp6 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price6.innerHTML = "";
    pp6 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider7 = document.getElementById("myCapsicum");
var output7 = document.getElementById("Capsicum");
var price7 = document.getElementById("pcap");
var pp7 = 0;
output7.innerHTML = slider7.value;
slider7.oninput = function () {
  output7.innerHTML = this.value;
  if (this.value == 1) {
    price7.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp7 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price7.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp7 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price7.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp7 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price7.innerHTML = "";
    pp7 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider8 = document.getElementById("myOnion");
var output8 = document.getElementById("Onion");
var price8 = document.getElementById("poni");
var pp8 = 0;
output8.innerHTML = slider8.value;
slider8.oninput = function () {
  output8.innerHTML = this.value;
  if (this.value == 1) {
    price8.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp8 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price8.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp8 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price8.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp8 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price8.innerHTML = "";
    pp8 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider9 = document.getElementById("myPineapple");
var output9 = document.getElementById("Pineapple");
var price9 = document.getElementById("ppin");
var pp9 = 0;
output9.innerHTML = slider9.value;
slider9.oninput = function () {
  output9.innerHTML = this.value;
  if (this.value == 1) {
    price9.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp9 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price9.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp9 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price9.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp9 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price9.innerHTML = "";
    pp9 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider10 = document.getElementById("myAvocado");
var output10 = document.getElementById("Avocado");
var price10 = document.getElementById("pavo");
var pp10 = 0;
output10.innerHTML = slider10.value;
slider10.oninput = function () {
  output10.innerHTML = this.value;
  if (this.value == 1) {
    price10.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp10 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price10.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp10 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price10.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp10 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price10.innerHTML = "";
    pp10 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider11 = document.getElementById("myPickles");
var output11 = document.getElementById("Pickles");
var price11 = document.getElementById("ppic");
var pp11 = 0;
output11.innerHTML = slider11.value;
slider11.oninput = function () {
  output11.innerHTML = this.value;
  if (this.value == 1) {
    price11.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp11 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price11.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp11 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price11.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp11 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price11.innerHTML = "";
    pp11 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

var slider12 = document.getElementById("myCarrot");
var output12 = document.getElementById("Carrot");
var price12 = document.getElementById("pcar");
var pp12 = 0;
output12.innerHTML = slider12.value;
slider12.oninput = function () {
  output12.innerHTML = this.value;
  if (this.value == 1) {
    price12.innerHTML = "$" + ((-.1 * this.value) + 0.6).toFixed(2);
    pp12 = ((-.1 * this.value) + 0.6).toFixed(2);
  } else if (this.value == 2) {
    price12.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6))).toFixed(2);
    pp12 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)));
  } else if (this.value == 3) {
    price12.innerHTML = "$" + (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6))).toFixed(2);
    pp12 = (((-.1 * this.value) + 0.6) + ((-.1 * (this.value - 1) + 0.6)) + ((-.1 * (this.value - 2) + 0.6)));
  } else {
    price12.innerHTML = "";
    pp12 = 0;
  }
  totalp();
  vegecheck();
  vege = true;
  countvege = countvege + 1;
  Nextvege();
}

function vegecheck() {
  if (pp5 > 0 || pp6 > 0 || pp7 > 0 || pp8 > 0 || pp9 > 0 || pp10 > 0 || pp11 > 0 || pp12 > 0) {
    saucesdisplay();
  }
}
var totalid = document.getElementById("totalPrice");

function totalp() {
  var total = pp1 + pp2 + pp3 + pp4 + pp5 + pp6 + pp7 + pp8 + pp9 + pp10 + pp11 + pp12 + pp13 + pp14 + pp15 + pp16 + pp17 + pp18 + pp19 + pp20 + pp21 + pp22 + pp23 + pp24;
  // var total = pp1 + pp2 + pp3 + pp4 + pp5+ pp6 +pp7 + pp8 + pp9 + pp10 + pp11 + pp12 + pp13+ pp18 + pp19 + pp20 + pp21 + pp22 + pp23;
  totalid.innerHTML = "$" + total.toFixed(2);
}
