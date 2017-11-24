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
  <link rel="icon" href="{{asset('img/logo.jpeg')}}">


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
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/js/master.js"></script>

  </script>
</head>
<body onload="updateNavBar()">
  <div id="preloader"></div>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" style="margin-top:10px" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<div class="w3-container w3-margin-right w3-padding w3-left">
		<img class="w3-display-left" src="{{asset('img/Logo KTF.PNG')}}" alt="logo" style="max-width:80px">
	</div class="w3-display-container">
		<a href="/ktfui" class="w3-text-orange w3-button w3-hover-white w3-left-align w3-bar-item w3-padding w3-identica w3-margin-left w3-large">Komunitas Tari FISIP UI</br>Radha Sarisha</a>
		<button onclick="searchBar()" class="w3-padding-large w3-btn w3-round w3-hide-small w3-right" style="font-size:20px;margin-top:10px"><i id="searchbutton" class="fa fa-search"></i></button>
    <div id="searchbar" class="w3-dropdown-content w3-bar-block w3-border w3-display-topright" style="margin-top:60px">
      <a href="#" class="w3-button w3-black w3-right"><i class="fa fa-search"></i></a>
      <input type="text" class="w3-col s9 w3-bar-item w3-input w3-right" placeholder="Search..">
    </div>
		<a id="contact" href="{{url('/contact')}}" class="link hvr-grow w3-text-grey w3-hover-text-black w3-bar-item w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Contact</a>
		<a id="services" href="{{url('/services')}}" class="link hvr-grow w3-text-grey w3-hover-text-black w3-bar-item w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Services</a>
		<a id="projects" href="{{url('/projects')}}" class="link hvr-grow w3-text-grey w3-hover-text-black w3-bar-item w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Projects</a>
		<a id="profile" href="{{(url('/profile1'))}}" class="link hvr-grow w3-text-grey w3-hover-text-black w3-bar-item w3-padding-large w3-hide-small w3-right w3-dinmed w3-margin">Profile</a>
    <a id="home" href="{{(url('/ktfui'))}}" class="hvr-grow w3-text-grey w3-hover-text-black w3-padding-small w3-hide-small w3-right w3-margin"><i class="w3-text-orange fa fa-home" aria-hidden="true" style="font-size:40px"></i></a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:71px">
  <a href="/profile1" class="w3-bar-item w3-button w3-padding-large">Profile</a>
  <a href="/projects" class="w3-bar-item w3-button w3-padding-large">Projects</a>
  <a href="/services" class="w3-bar-item w3-button w3-padding-large">Services</a>
  <a href="/contact" class="w3-bar-item w3-button w3-padding-large">Contact</a>
</div>

<!-- Page content -->
@yield('content')
<!-- Page content -->
<!-- Footer -->
<img class="w3-opacity" src="{{ asset('img/foto bawah.jpg') }}" alt="Lights" style="width:100%">
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a target="_blank" href="https://www.instagram.com/ktfui/"><i class="fa fa-instagram w3-hover-opacity" style="font-size:40px"></i></a>
  <a target="_blank" href="https://www.youtube.com/user/KTFfisipUI08"><i class="fa fa-youtube w3-hover-opacity" style="font-size:40px"></i></a>
  <a target="_blank" href="https://twitter.com/ktfui"><i class="fa fa-twitter w3-hover-opacity" style="font-size:40px"></i></a>
  <a target="_blank" href="https://www.facebook.com/ktf.ui.radhasarisha"><i class="fa fa-facebook-official w3-hover-opacity" style="font-size:40px"></i></a>

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

// Toggle the search button
function searchBar() {
    var x = document.getElementById("searchbar");
    var y = document.getElementById("searchbutton");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.className = "fa fa-close";
    } else {
        x.className = x.className.replace(" w3-show", "");
        y.className = "fa fa-search";
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
      $('#projects').removeClass('w3-text-grey');
      $('#projects').addClass('w3-text-orange');
      $('#projects').css('font-weight','bold');
    }
}
</script>

</body>
</html>
