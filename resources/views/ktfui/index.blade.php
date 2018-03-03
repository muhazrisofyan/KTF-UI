@extends('layouts.master')

@section('style')
  <style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  img {
    padding: 0;
    display: block;
    margin: 0 auto;
    max-height: 100%;
    max-width: 100%;
  }
    </style>
@endsection

@section('content')
  <br><br>
<!-- Page content -->
  <div class="w3-content w3-display-container" style="max-width:2000px;">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
      <img class="w3-animate-fading" src="{{asset("img/home/1.JPG")}}" style="width:100%">
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img class="w3-animate-fading" src="{{asset("img/home/2.JPG")}}" style="width:100%">
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img class="w3-animate-fading" src="{{asset("img/home/3.jpg")}}" style="width:100%">
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
          <a href="profile1"><img src="{{url('img/traditional dance.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
  		<h1 class="w3-stackyard">Traditional</h1><h4 class="w3-dinlight w3-">dance</h4>
        </div>
        <div class="w3-third">
          <a href="profile2"><img src="{{url('img/modern dance.png')}}" class="w3-btn w3-circle" alt="Random Name" style="width:80%"></a>
  		<h1 class="w3-stackyard">Modern</h1><h4 class="w3-dinlight">dance</h4>
        </div>
  	  <div class="w3-third">
          <a href="profile3" ><img src="{{url('img/traditional music.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
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
    		   music. Our performance experiences &amp; projects diverse both in national and
    		   international scale</h6>
    		  <a href="/download" class="w3-cyan w3-border w3-round-xlarge w3-btn w3-margin"><span style="color:white">Company Profile</span></a>
        </div>
      </div>
    </div>
  <!-- End Page Content -->
  </div>

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
        setTimeout(carousel, 6000);
    }
  </script>
@endsection
