@extends('layouts.master')

@section('style')
  <style>
    body {font-family: "Lato", sans-serif}
  </style>
@endsection

@section('content')
<!-- Page content -->

<div class="w3-row" style="margin-top:80px">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="{{asset('storage/project_img/' . $project->id . '/1.png')}}" alt="Nature" style="width:100%; height:500px">
    <div class="w3-container">
      <h3><b>{{$project->title}}</b></h3>
      <h5>{{$project->snippet}}, <span class="w3-opacity">{{$project->created_at}}</span></h5>
    </div>

    <div class="w3-container">
      <p>{!!$project->content!!}</p>
      <div class="w3-row">
      </div>
    </div>
  </div>

</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->

  <!-- Posts -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Related Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <a href="post"><img src="{{asset('img/1.jpg')}}" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <a href="post"><img src="{{asset('img/2.jpg')}}" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li>
      <li class="w3-padding-16">
        <a href="post"><img src="{{asset('img/3.jpg')}}" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <a href="post"><img src="{{asset('img/4.jpg')}}" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>
    </ul>
  </div>
  <hr>

  <!-- Labels / tags -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Tari Traditional</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Achievement</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">UI Art War</span>
    </p>
    </div>
  </div>

<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

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
      setTimeout(carousel, 4000);
  }
</script>
@endsection
