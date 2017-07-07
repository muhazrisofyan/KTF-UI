@extends('layouts.master')

@section('content')
<br><br><br>
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
<!-- End page content -->

@endsection
