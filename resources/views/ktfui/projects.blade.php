<!--Bagian sini banyak yg belum-->

@extends('layouts.master')

@section('content')
<br><br><br>
@if(session()->has('message'))
<div class="alert alert-success">
    <strong>Success! </strong>{{ session()->get('message') }}
</div>
@endif

@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <strong>Failed!</strong> {{$error}}
    </div>
  @endforeach
@endif
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
    @foreach ($projects as $project)
      <div class="w3-third w3-container w3-margin-bottom">
  	    <a href="/projects/{{$project->id}}"><img src="{{asset('storage/project_img/' . $project->id . '/1.png')}}" alt="Norway" width="425.33" height="281.77" class="w3-hover-opacity"></a>
        <div class="w3-container w3-white">
          <p><b>@if (strlen($project->title) > 50)
            {{substr($project->title, 0, 50)}}
          @else
            {{$project->title}}
          @endif</b></p>
          <p>{{$project->snippet}}</p>
        </div>
      </div>
    @endforeach

    {{-- <div class="w3-third w3-container w3-margin-bottom">
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
    </div> --}}
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar" style="">
      {{$projects->appends(Request::input())->render()}}
    </div>
  </div>

<!-- End Page Content -->
</div>
@endsection
