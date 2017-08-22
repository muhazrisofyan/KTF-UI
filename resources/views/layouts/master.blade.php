<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <title>Komunitas Tari FISIP UI</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

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
  <link rel="stylesheet" href="/css/master.css" >
</head>
<body onload="updateNavBar()">
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" style="margin-top:10px" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<div class="w3-container w3-margin-right w3-padding w3-left">
		<img class="w3-display-left" src="img/Logo KTF.PNG" alt="logo" style="max-width:80px">
	</div>
		<a href="ktfui" class="w3-text-orange w3-button w3-hover-white w3-left-align w3-bar-item w3-padding w3-identica w3-margin-left w3-large">Komunitas Tari FISIP UI</br>Radha Sarisha</a>
		<a href="javascript:void(0)" class="w3-padding-large w3-btn w3-round w3-hide-small w3-right w3-margin"><i class="fa fa-search"></i></a>
		<a id="contact" href="contact" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round-large w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Contact</a>
		<a id="services" href="services" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round-large w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Services</a>
		<a id="project" href="project" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round-large w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Project</a>
		<a id="profile" href="profile1" class="w3-text-grey w3-hover-text-black w3-bar-item w3-btn w3-round-large w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Profile</a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:71px">
  <a href="profile1" class="w3-bar-item w3-button w3-padding-large">Profile</a>
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
  <a target="_blank" href="https://www.instagram.com/ktfui/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a target="_blank" href="https://www.youtube.com/user/KTFfisipUI08"><i class="fa fa-youtube w3-hover-opacity"></i></a>
  <a target="_blank" href="hhttps://twitter.com/ktfui"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a target="_blank" href="https://www.facebook.com/ktf.ui.radhasarisha"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
function updateNavBar(){
    var url = window.location.href;
    var array_url = url.split('/');
    var nav = array_url[3];
    if(nav.includes('profile')){
      $('#profile').removeClass('w3-text-grey');
      $('#profile').addClass('w3-text-orange');
      $('#profile').css('font-weight','bold');
    }else if (nav.localeCompare('services') == 0) {
      $('#services').removeClass('w3-text-grey');
      $('#services').addClass('w3-text-orange');
      $('#services').css('font-weight','bold');
    }else if (nav.localeCompare('contact') == 0) {
      $('#contact').removeClass('w3-text-grey');
      $('#contact').addClass('w3-text-orange');
      $('#contact').css('font-weight','bold');
    }else if (nav.localeCompare('p') == 1) {
      $('#project').removeClass('w3-text-grey');
      $('#project').addClass('w3-text-orange');
      $('#project').css('font-weight','bold');
    }
}
</script>

</body>
</html>
