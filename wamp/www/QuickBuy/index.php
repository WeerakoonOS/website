<?php  
	include ("./connect_db.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>QuickBuy.lk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="commonPage.css">
	</head>
<body>
<!--CONTAINER-->
<div id="container">
	<!--HEADER AREA-->
			<div id="signin">
			<button onclick="redirectlogin()" class="button" id="signinbtn">Already a member?</button>
			<button onclick="redirectsignup()"class="button">Sign Up</button>
			</div>
		<div id="logo">
			<img src="./img/logo.jpg">
		</div>
		<div>
			<p id="stext1"> Welcome to QuickBuy.lk !</p>
		</div>
		<div id="top_info">
			<form id="searchform" action="./searchResults.php" method="POST">				
				<input type="text" name="searchText" id="stext2" name="searchText" placeholder="Search Here">
				<input type="submit" id="sbutton" value="Search">
			</form>
		</div>
		<div id="navbar">
			<ol id="menu">
				<li><a href="./categoryPage.php">Categories</a></li>
				<li><a href="./contactPage.php">Help and Contact</a></li>
				<li><a href="./aboutPage.php">About Us</a></li>
				<li><a href="./myAccount.php">My Account</a></li>
			</ol>
		</div>
		

	
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./img/5.jpg" alt="img1" width="150%" align="center">
  <div class="text">Trusted Excellence</div>
</div>

<!-- <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./img/6.jpg" alt="img1" style="width:100%">
  <div class="text">Caption Two</div>
</div> -->

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./img/7.jpg" alt="img1" style="width:150%" align="center">
  <div class="text">Ease of Use</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./img/8.jpg" alt="img1" style="width:150%" align="center">
  <div class="text">Reliability</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</div>
<div class="footer-copyright">
        Copyright Â© 2017 <b>Team V4 </b>
    </div>
<!--END CONTAINER-->


<style>
body, html {
    height: 100%;
    margin: 0;
}
div.slideshow-container{
	margin-left: -50px;
	width: 100%;
}

.bgimg {
    background-image: url('/QuickBuy/img/uni.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
   
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <h1> QuickBuy Store </h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("sep 5, 2017 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

<script type="text/javascript">
function redirectsignup(){
	window.location.replace("./signup.php");
}
function redirectlogin(){
	window.location.replace("./login.php");
}
</script>

</body>
</html>