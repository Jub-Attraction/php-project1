<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="w3-cdn/w3.css">
<link rel="stylesheet" type="text/css" href="w3-cdn/font-awesome.css">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

</head>
<body>
	<div class="w3-container w3-padding-large w3-black w3-center">
		<i class="w3-text-pink w3-left">contact us: 9896582545/8594683214</i>
		<i class="fa fa-facebook w3-text-blue w3-large"> join: jubair@facebook.com</i>
		<i class="w3-right w3-text-pink">email: jubairraj3@gmail.com</i>
	</div>

<div class="w3-container w3-light-grey">
	<div class="w3-border w3-xlarge">


		<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-black" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">About</a>
  <a href="#" class="w3-bar-item w3-button">Contact Us</a>
  <a href="#" class="w3-bar-item w3-button">Our Service</a>
  <a href="#" class="w3-bar-item w3-button">Member List</a>
</div>

<!-- Page Content -->
<div class="w3-cyan">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
  </div>
</div>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>



		<!--<a href="" class="w3-button w3-green"><i class="fa fa-bars"></i></a>-->
		<a href="" class="w3-button w3-right"><i class="fa fa-sign-in"></i></a>
		<a href="" class="w3-button w3-right"><i class="fa fa-globe"></i></a>
		<a href="" class="w3-button w3-right"><i class="fa fa-envelope"></i></a>
		<a href="" class="w3-button w3-right"><i class="fa fa-search"></i></a>

		</div>


		
	</div>
	<!-- slide show -->
	<div class="w3-container">
  <h2 class="w3-text-teal">Bussiness Cart</h2>
  <p class="w3-text-deep-purple">Bussiness opportunity availbale here for everyone, you will have to know us. suprer power and energy giving from here.you can believe it.</p>
</div>

<div class="w3-content w3-display-container" style="max-width:1500px">
  <img class="mySlides" src="imgs/banner-1.jpg" style="width:100%">
  <img class="mySlides" src="imgs/banner-2.jpg" style="width:100%">
  <img class="mySlides" src="imgs/banner-3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<div class="w3-container">

<div class="w3-bar w3-blue">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">About</a>
  <a href="#" class="w3-bar-item w3-button">Contact</a>
  <a href="#" class="w3-bar-item w3-button">Our Service</a>
  <a href="#" class="w3-bar-item w3-button">Member List</a>

</div>

</div>

<!--<div class="w3-container">
  <p>Copy Right: 2020 All of Reserved </p>
</div>
</body>
</html>-->