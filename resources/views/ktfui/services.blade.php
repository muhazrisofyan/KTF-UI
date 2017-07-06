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
<h1 class="w3-jumbo w3-text-orange w3-center w3-stackyard"><b>Our Services</b></h1>
<!-- Page content -->
<div class="w3-padding-64 w3-orange" style="z-index: 1" >
	<div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 style="z-index: 1" class="w3-xxxlarge w3-text-light-grey w3-dinlight"><b>Traditional and Modern Dance Performance</b></h1>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="w3-col l4 m6">
      <img style="z-index: 1" src="{{url('img/traditional dance.png')}}" class="w3-image w3-right w3-hide-small" width="335" height="471">
    </div>
  </div>
</div>

<div class="w3-padding-64 w3-light-grey">
	<img src="img/bunga2an.png" class="w3-display-left w3-opacity-max" style="width:45%;z-index: -1">
  <img src="img/bunga3an.png" class="w3-display-bottomright w3-opacity-max" style="width:60%;z-index: -1">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
      <img style="z-index: 1" class="w3-image w3-round-large w3-hide-small" src="{{url('img/modern dance.png')}}" alt="App" width="335" height="471">
    </div>
    <div class="w3-col l8 m6">
      <h1 class="w3-xxxlarge w3-text-orange w3-dinlight"><b>Dance Costume Rentals</b></h1>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
</div>

<div class="w3-padding-64 w3-orange" style="z-index: 1">
	<div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-xxxlarge w3-text-light-grey w3-dinlight"><b>Dance Class and Workshop</b></h1>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="w3-col l4 m6">
      <img src="{{url('img/traditional music.png')}}" class="w3-image w3-right w3-hide-small" width="335" height="471">
    </div>
  </div>
</div>
<br>
<!-- Page content -->
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
/* //Automatic Slideshow - change image every 4 seconds
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
} */

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
