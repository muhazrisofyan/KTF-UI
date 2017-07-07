<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
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
  @yield('style')
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<div class="w3-container w3-margin-right w3-left">
		<img class="w3-display-left" src="img/Logo KTF.PNG" alt="logo" style="max-width:80px">
	</div>
		<a href="ktfui" class="w3-text-orange w3-button w3-hover-white w3-left-align w3-bar-item w3-padding w3-identica w3-margin-left w3-large">Komunitas Tari FISIP UI</br>Radha sarisha</a>
		<a href="javascript:void(0)" class="w3-padding-large w3-btn w3-round w3-hide-small w3-right w3-margin"><i class="fa fa-search"></i></a>
		<a id="a1" href="contact" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Contact</a>
		<a id="a2" href="services" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Services</a>
		<a id="a3" href="project" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Project</a>
		<a id="a4" href="achievement" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Achievement</a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="achievement" class="w3-bar-item w3-button w3-padding-large">Achievement</a>
  <a href="project" class="w3-bar-item w3-button w3-padding-large">Project</a>
  <a href="services" class="w3-bar-item w3-button w3-padding-large">Services</a>
  <a href="contact" class="w3-bar-item w3-button w3-padding-large">Contact</a>
</div>

<!-- Page content -->
@yield('content')
<!-- Page content -->
<!-- Footer -->
<img class="w3-opacity" src="{{ url('img/foto bawah.jpg') }}" alt="Lights" style="width:100%">
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="https://www.instagram.com/ktfui/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.youtube.com/user/KTFfisipUI08"><i class="fa fa-youtube w3-hover-opacity"></i></a>
  <a href="hhttps://twitter.com/ktfui"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="https://www.facebook.com/ktf.ui.radhasarisha"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
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
