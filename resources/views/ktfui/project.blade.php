<!--Bagian sini banyak yg belum-->

@extends('layouts.master')

@section('content')
<br><br><br>
<div class="w3-row">
	<!-- Header -->
  <header id="portfolio">
    <div class="w3-container">
    <h1><b>Project</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span>
      <button class="w3-button w3-orange">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Misi Budaya</button>
      <button class="w3-button w3-white"><i class="fa fa-photo w3-margin-right"></i>Pagelaran</button>
      <button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Lomba Besar</button>
    </div>
    </div>
  </header>

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
	  <a href="post"><img src="img/1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="post"><img src="img/2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <a href="post"><img src="img/3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="post"><img src="img/4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="post"><img src="img/5.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <a href="post"><img src="img/6.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-orange">«</a>
      <a href="#" class="w3-bar-item w3-orange w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-orange">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-orange">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-orange">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-orange">»</a>
    </div>
  </div>

<!-- End Page Content -->
</div>
@endsection
