<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<title>Komunitas Tari FISIP UI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mySlides {display: none}
@font-face {
    font-family: stackyard;
    src: url(font/stack.ttf);
}
@font-face {
    font-family: identica;
    src: url(font/Identica-Regular.ttf);
}
@font-face {
    font-family: dinmed;
    src: url(font/ufonts.com_din-medium.ttf);
}
@font-face {
    font-family: dinlight;
    src: url(font/DINLightAlternate.ttf);
}

.w3-dinlight {
    font-family: dinlight;
}
.w3-dinmed {
    font-family: dinmed;
}
.w3-identica {
    font-family: identica;
}
.w3-stackyard {
    font-family: stackyard;
}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<div class="w3-container w3-margin-right w3-left">
		<img class="w3-display-left" src="img/Logo KTF.PNG" alt="logo" style="max-width:80px">
	</div>
		<a href="ktfui" class="w3-text-orange w3-button w3-hover-white w3-left-align w3-bar-item w3-padding w3-identica w3-margin-left">Komunitas Tari FISIP UI</br>Radha sarisha</a>
		<a href="javascript:void(0)" class="w3-padding-large w3-btn w3-hide-small w3-right"><i class="fa fa-search"></i></a>        
		<a href="contact" class="w3-text-grey w3-bar-item w3-btn w3-padding-large w3-hide-small w3-right w3-dinmed">Contact</a>
		<a href="services" class="w3-text-grey w3-bar-item w3-btn w3-padding-large w3-hide-small w3-right w3-dinmed">Services</a>
		<a href="project" class="w3-text-grey w3-bar-item w3-btn w3-padding-large w3-hide-small w3-right w3-dinmed">Project</a>
		<a href="achievement" class="w3-text-grey w3-bar-item w3-btn w3-padding-large w3-hide-small w3-right w3-dinmed">Achievement</a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="achievement" class="w3-bar-item w3-button w3-padding-large">Achievement</a>
  <a href="project" class="w3-bar-item w3-button w3-padding-large">Project</a>
  <a href="services" class="w3-bar-item w3-button w3-padding-large">Services</a>
  <a href="contact" class="w3-bar-item w3-button w3-padding-large">Contact</a>
</div>
<br></br>
<!-- Page content -->
<div class="w3-content w3-display-container" style="max-width:2000px;">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="img/home 1.JPG" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/home 2.JPG" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/home 3.jpg" style="width:100%">
  </div>
  <img src="img/bunga2an.png" class="w3-display-left w3-opacity-max" style="width:45%;z-index: -1">
  <img src="img/bunga3an.png" class="w3-display-bottomright w3-opacity-max" style="width:60%;z-index: -1">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-32" style="max-width:900px" id="band">
  
	<div class="w3-container w3-text-orange w3-padding-16">
		<h1 class="w3-stackyard">We aspire passion through</h1>
	</div>
    <div class="w3-row w3-padding-16 w3-text-orange">
      <div class="w3-third">
        <img src="{{url('img/traditional dance.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%">
		<h1 class="w3-stackyard">Traditional</h1><h4 class="w3-dinlight w3-">dance</h4>
      </div>
      <div class="w3-third">
        <img src="{{url('img/modern dance.png')}}" class="w3-btn w3-circle" alt="Random Name" style="width:80%">
		<h1 class="w3-stackyard">Modern</h1><h4 class="w3-dinlight">dance</h4>
      </div>
	  <div class="w3-third">
        <img src="{{url('img/traditional music.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%">
		<h1 class="w3-stackyard">Traditional</h1><h4 class="w3-dinlight">music</h4>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="" id="tour">
    <div class="w3-container w3-content w3-padding-32" style="max-width:800px">
	  <div class="w3-col m6 w3-large w3-margin-bottom" >
		
      </div>
	   <div class="w3-col m6 w3-large w3-margin-bottom">
	   <h4 class="w3-text-orange w3-dinlight">Komunitas Tari FISIP UI</h4>
	   <h2 class="w3-text-orange w3-identica">/Radha Sarisha/</h2>
	   <h6 class="w3-dinlight">A professional dance community in Faculty of Social and Political
		  Sciences, Universitas Indonesia that embody and develop interests and talents of students in the art of dance, both traditional and modern,
		  also traditional music</h6>
		
		<h6 class="w3-dinlight">Established in July 2008, KTF Radha Sarisha consists of (more or less)
		   100 members, which are FISIP UI students who have passion in dance and
		   music. Our performance experiences & projects diverse both in national and
		   international scale</h6>
		<a href="/download" class="w3-grey w3-border w3-btn w3-margin w3-dinlight">Company Profile</a>
      </div>
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<img src="{{ url('img/foto bawah.jpg') }}" alt="Lights" style="width:100%">
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-youtube w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
