<html lang="en" >
<link rel="icon" href="images/fave.png" type="image" />
<head>



	<div class="panels">
  
<a href="#admin_form" id="login_pop"><img src="images/admin.png"  width="25px"  height= "25px"  title = "Admin head"/></a>



<meta charset="utf-8" />

<title>Reeracoen Time Record</title>

  <link href="index.css" rel="stylesheet" type="text/css" />




</head>
<style>



body{
background:url(images/whites.png) no-repeat center top scroll;
background-size: 100%;

}
</style>
<body>



<div class="main">



	<div class="panel">
  

<a href="#join_form" id="join_pop">Log Out</a>
<a href="#login_form" id="login_pop">&nbsp Log In &nbsp</a>



</div>
<br>
<br>
<br>
<br>
<br>

<br>
<div>
 <center> <canvas id="canvas" width="180" height="180"
</canvas></center>

<center>
 
 						<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:240px;height:80px;"src="http://www.clocklink.com/html5embed.php?clock=043&timezone=GMT0800&color=blue&size=240&Title=&Message=&Target=&From=2018,1,1,0,0,0&Color=blue"></iframe>
					</center></div></h3>&nbsp;</color>
  
<a href="#x" class="overlay" id="admin_head"></a>


<div class="popup">

<center><h2>Admin Head</h2></center>

<br>
	
<div>
<form action="../admin_head/login.php" method="post"> 
<label><b>Username</b></label>

<input type="text" name="username" id="login" value="" />

</div>

<div>

<label><b>Password</b></label>

<input type="password" name ="password" id="password" value="" />

</div>

  <center> <input type="submit"  class="btn" name="login" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>
<a class="close" href="#close"></a>



</div>


<a href="#x" class="overlay" id="admin_form"></a>

<div class="popup">

<center><h2>Administrator</h2></center>

<br>
	
<div>
<form action="login.php" method="post"> 
<label><b>Username</b></label>

<input type="text" name="username" id="login" value="" />

</div>

<div>

<label><b>Password</b></label>

<input type="password" name ="password" id="password" value="" />

</div>

  <center> <input type="submit"  class="btn" name="login" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>
<a class="close" href="#close"></a>



</div>


<!-- popup form #1 -->

<a href="#x" class="overlay" id="login_form"></a>

<div class="popup">

<center><h2>Login Form</h2></center>
<br>

<div>
<form action="in_db.php" method="POST">
<label><b>ID Number</b></label>

<input type="text"   id="Id_number" name="id"  required="required"  />
<Br>
<label><b>Password</b></label>
<input type="password"   id="Id_number" name="pname"  required="required"  />

</div>
<div>
	<b><label>Remarks</label></b>
		
            <select name="remarks"   value="Remarks"class="select2_single form-control"  text-align = "center" required="required" tabindex="-1" >
            <option value="Log In"> Log In</option>
         
											
              </select>
                                    </div>


<br>
 <center> <input type="submit"  class="btn" name="submit1" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>

<a class="close" href="#close"></a>

</div>





<a href="#x" class="overlay" id="join_form"></a>

<div class="popup">

<form action="out_db.php" method="POST">

<center><h2>Log Out Form</h2></center>
<br>



<div>

<b><label>ID Number</label></b>

<input type="text" id="Id_Number" name="id"  required="required" />
<br>
<b><label>Password</label></b>

<input type="password" id="Id_Number" name="pname"  required="required" />

</div>
<div>
<b><label>Remarks</label></b>
					
      <select name="remarks" id="remarks" value="Remarks"class="select2_single form-control" required="required" tabindex="-1"  >
        <option value="Log Out"> Log Out</option>
         
											
           </select>
		   </div>
<div>

<label><b>Note</b></label>

  <textarea id="pass" name="Note"   class="form-control"  maxlength="500"/></textarea>

</div>



 <center> <input type="submit"  class="btn" name="submit1" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>

<a class="close" href="#close"></a>
</div>
<style>
	.main {

background:  #141414 url(images/aa.png)  no-repeat  ;

width: 800px 	;

height: 500px ;

margin: 80px auto;



}

.panel {
	font: 1.2em normal arial;


background-color:#1dabf9 ;

height: 34px;

padding: 10px;


}

.panel a#login_pop, .panel a#join_pop {

border: 1px solid #aaa;

color: black;

display: block;

float: right;

margin-right: 10px;

padding: 5px 10px;
text-decoration: none;

text-shadow: 1px 1px #000;

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

-ms-border-radius: 10px;

-o-border-radius: 10px;

border-radius: 10px;

}

a#login_pop:hover, a#join_pop:hover {

border-color: #eee;

}
.panels {
	font: 1.2em normal arial;


background-color:transparent;

height: 34px;

padding: 10px;


}

.panels a#login_pop, .panel a#join_pop {

border: 1px solid #aaa;

color: black;

display: block;

float: right;

margin-right: 10px;

padding: 5px 10px;
text-decoration: none;

text-shadow: 1px 1px #000;

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

-ms-border-radius: 10px;

-o-border-radius: 10px;

border-radius: 10px;

}

a#login_pop:hover, a#join_pop:hover {

border-color: #eee;

}
.overlay {

background-color: rgba(0, 0, 0, 0.6);

bottom: 0;

cursor: default;

left: 0;

opacity: 0;

position: fixed;
right: 0;

top: 0;

visibility: hidden;

z-index: 1;

-webkit-transition: opacity .5s;

-moz-transition: opacity .5s;

-ms-transition: opacity .5s;

-o-transition: opacity .5s;

transition: opacity .5s;

}

.overlay:target {

visibility: visible;

opacity: 1;

}
.popup-input[type=text]{
	height:60px;	
		text-align: center;
}


.popup {

background-color: #1dabf9;
font-size:20px;


display: inline-block;

left: 50%;

opacity: 0;

padding: 15px;
position: fixed;
text-align: justify;
top: 100% ;
visibility: hidden;

z-index: 10;

-webkit-transform: translate(-50%, -50%);

-moz-transform: translate(-50%, -50%);

-ms-transform: translate(-50%, -50%);

-o-transform: translate(-50%, -50%);

transform: translate(-50%, -50%);

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

-ms-border-radius: 10px;



-webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
-ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-webkit-transition: opacity .5s, top .5s;

-moz-transition: opacity .5s, top .5s;

-ms-transition: opacity .5s, top .5s;

-o-transition: opacity .5s, top .5s;

transition: opacity .5s, top .5s;

}

.overlay:target+.popup {

top: 50%;

opacity: 1;

visibility: visible;

}

.close {

background-color:black;

height: 30px;

line-height: 30px;

position: absolute;

right: 0;

text-align: center;

text-decoration: none;

top: -15px;

width: 30px;
-webkit-border-radius: 15px;

-moz-border-radius: 15px;

-ms-border-radius: 15px;

-o-border-radius: 15px;

border-radius: 15px;	

}

.close:before {

color: white;

content: "X";

font-size: 24px;

text-shadow:black;

}

.close:hover {

background-color: #1dabf9;

}

.popup p, .popup div {

margin-bottom: 10px;

}

.popup label {

display: inline-block;

text-align: left;

width: 120px;

}

.popup input[type="text"], .popup input[type="password"] {
text-align: center;
border: 1px solid;
height:30px;
border-color: #999 #ccc #ccc;

margin: 0;

padding: 2px;

-webkit-border-radius: 2px;

-moz-border-radius: 2px;

-ms-border-radius: 2px;

-o-border-radius: 2px;

border-radius: 2px;

}
.popup select {
    border: 1px solid #fff;
    background-color: white;
	text-align: center;
			padding: 0.4em 0.25em;
			color:black;
			height:30px;
			width:175px;
}
.popup-select option{
      border: 1px solid #fff;
    background-color: white;
	text-align: center;
			padding: 0.4em 0.25em;
			color:white;
			height:30px;
			width:175px;
	
}
.popup textarea{
	
height:60px;	
		text-align: center;
			padding: 0.4em 0.25em;
	width: 173px;
	background: white;
	
	font-size: .8em;
	color:black;	
		text-align: center;


.popup input[type="text"]:hover, .popup input[type="password"]:hover {
height:30px;
	
text-align: center;
}
}
div.gallery {
    margin: 10px;
    border: 0px solid #ccc;
    float: left;
    width: 300px;
}



div.desc {
	
    padding: 30px;
    text-align: center;
}


	

a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 5em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

h2 {
    font-weight:700;
    color:blue;
    font-size:20px;
}

h2, p {
	margin-bottom:5px;
}

@font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('BebasNeue-webfont.woff') format('woff'),
         url('BebasNeue-webfont.ttf') format('truetype'),
         url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.container {width: 960px; margin: 0 auto; overflow: hidden;}

.clock {width:800px; margin:0 auto; padding:30px; border:1px ; color:#3498db; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:15px; text-align:center; text-shadow:0 0 0px #00c6ff; }

ul { width:400px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
ul li { display:inline; font-size:2em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 0px #00c6ff; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 0px #00c6ff; }	
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}
.clock{
	
	background-color:white;
}
</style>
				


<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.86
setInterval(drawClock, 1500);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');

  grad.addColorStop(1, 'white');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = 'black';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<br>

<html>
<head>

<script>
var d = new Date(<?php echo time() * 1000 ?>);

function updateClock() {
  // Increment the date
  d.setTime(d.getTime() + 1000);

  // Translate time to pieces
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes();
  var currentSeconds = d.getSeconds();

  // Add the beginning zero to minutes and seconds if needed
  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  // Determine the meridian
  var meridian = (currentHours < 12) ? "am" : "pm";

  // Convert the hours out of 24-hour time
  currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
  currentHours = (currentHours == 0) ? 12 : currentHours;

  // Generate the display string
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridian;

  // Update the time
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

window.onload = function() {
  updateClock();
  setInterval('updateClock()', 1000);
}
</script>
</head>



  


</body>

</html>
