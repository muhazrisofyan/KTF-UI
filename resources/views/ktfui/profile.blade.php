@extends('layouts.master')

@section('content')
  <br><br><br><br><br>
  <div class="w3-container">
    <div id="1" class="mySlides fade">
      <div class="w3-container w3-white">

        {{-- Start introduction --}}
        <div class="w3-content" style="padding-top:20px;text-align:justify">
          <p>Tari tradisional Indonesia mencerminkan kekayaan dan keanekaragaman bangsa Indonesia. Beberapa tradisi seni tari seperti; tarian Bali, tarian Jawa, tarian Sunda, tarian Minangkabau, tarian Palembang, tarian Melayu, tarian Aceh, dan masih banyak lagi adalah seni tari yang berkembang sejak dahulu kala, meskipun demikian tari ini tetap dikembangkan hingga kini. Beberapa tari mungkin telah berusia ratusan tahun, sementara beberapa tari berlanggam tradisional mungkin baru diciptakan kurang dari satu dekade yang lalu. Penciptaan tari dengan koreografi baru, tetapi masih di dalam kerangka disiplin tradisi tari tertentu masih dimungkinkan. Sebagai hasilnya, muncullah beberapa tari kreasi baru. Tari kreasi baru ini dapat merupakan penggalian kembali akar-akar budaya yang telah sirna, penafsiran baru, inspirasi atau eksplorasi seni baru atas seni tari tradisional.</p>
        </div>
        {{-- End of Introduction --}}

        {{-- Start Coach Profile  --}}
        <div class="w3-container w3-content w3-center w3-padding-32" style="max-width:900px" id="band">
        <div class="w3-row w3-padding-16 w3-text-orange">
          <div class="w3-third">
            <a href="profile1"><img src="{{url('img/traditional dance.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Susilo</h1><h4 class="w3-dinlight w3-">dance</h4>
          </div>
          <div class="w3-third">
            <a href="profile2"><img src="{{url('img/modern dance.png')}}" class="w3-btn w3-circle" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Bambang</h1><h4 class="w3-dinlight">dance</h4>
          </div>
        <div class="w3-third">
            <a href="profile3" ><img src="{{url('img/traditional music.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Yudhoyono</h1><h4 class="w3-dinlight">music</h4>
          </div>
        </div>
      </div>
      {{-- End of Coach Profile --}}

      {{-- Start dance description --}}
      <div class="w3-container w3-content" style="margin-bottom:50px">
        <h1 class="w3-stackyard w3-text-orange">List of Traditional Dance</h1>

        <ul class="w3-ul" style="text-align:justify">
          <li>Jill
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
               ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
               aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
               in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
               deserunt mollit anim id est laborum.
             </p>
          </li>
          <li>Eve
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
               ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
               aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
               in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
               deserunt mollit anim id est laborum.
             </p>
          </li>
          <li>Adam</li>
        </ul>
      </div>
      {{-- End of dance description --}}

      {{-- Start Picture and Video --}}
      <div class="w3-container w3-content">
        <h1 class="w3-stackyard w3-text-orange">Gallery</h1>
        <ul class="w3-ul">
          <li>
            <div class="w3-row">
                <div class="w3-half w3-card-2 w3-content w3-padding">
                  <img class="w3-image" src="img/1.jpg" alt="Norway">
                  <div class="w3-container w3-center">
                    <p>The Troll's tongue in Hardanger, Norway</p>
                  </div>
                </div>
                <div class="w3-half w3-card-2 w3-content w3-padding">
                  <img class="w3-image" src="img/2.jpg" alt="Norway">
                  <div class="w3-container w3-center">
                    <p>The Troll's tongue in Hardanger, Norway</p>
                  </div>
                </div>
            </div>
          </li>
          <li>
            <div class="w3-row">
                <div class="w3-half w3-card-2 w3-content w3-padding">
                  <img class="w3-image" src="img/1.jpg" alt="Norway">
                  <div class="w3-container w3-center">
                    <p>The Troll's tongue in Hardanger, Norway</p>
                  </div>
                </div>
                <div class="w3-half w3-card-2 w3-content w3-padding">
                  <img class="w3-image" src="img/2.jpg" alt="Norway">
                  <div class="w3-container w3-center">
                    <p>The Troll's tongue in Hardanger, Norway</p>
                  </div>
                </div>
            </div>
          </li>
          <li>
            <div class="w3-row w3-content w3-container">
              <iframe src="https://www.youtube.com/watch?v=lp-EO5I60KA" width="720" height="360"></iframe>
            </div>
          </li>
        </ul>
      </div>
      {{-- End of Picture and Video --}}

      </div>
    </div>

    <div id="2" class="mySlides fade">
      <div class="w3-container w3-white">

        {{-- Start introduction --}}
        <div class="w3-content" style="padding-top:20px">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
        </div>
        {{-- End of Introduction --}}

        {{-- Start Coach Profile  --}}
        <div class="w3-container w3-content w3-center w3-padding-32" style="max-width:900px" id="band">
        <div class="w3-row w3-padding-16 w3-text-orange">
          <div class="w3-third">
            <a href="profile1"><img src="{{url('img/traditional dance.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Susilo</h1><h4 class="w3-dinlight w3-">dance</h4>
          </div>
          <div class="w3-third">
            <a href="profile2"><img src="{{url('img/modern dance.png')}}" class="w3-btn w3-circle" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Yudoyhono</h1><h4 class="w3-dinlight">dance</h4>
          </div>
        <div class="w3-third">
            <a href="profile3" ><img src="{{url('img/traditional music.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Bambang</h1><h4 class="w3-dinlight">music</h4>
          </div>
        </div>
      </div>
      {{-- End of Coach Profile --}}

      </div>
    </div>

    <div id="3" class="mySlides fade">
      <div class="w3-container w3-white">

        {{-- Start introduction --}}
        <div class="w3-content" style="padding-top:20px">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
        </div>
        {{-- End of Introduction --}}

        {{-- Start Coach Profile  --}}
        <div class="w3-container w3-content w3-center w3-padding-32" style="max-width:900px" id="band">
        <div class="w3-row w3-padding-16 w3-text-orange">
          <div class="w3-third">
            <a href="profile1"><img src="{{url('img/traditional dance.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Bambang</h1><h4 class="w3-dinlight w3-">dance</h4>
          </div>
          <div class="w3-third">
            <a href="profile2"><img src="{{url('img/modern dance.png')}}" class="w3-btn w3-circle" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Susilo</h1><h4 class="w3-dinlight">dance</h4>
          </div>
        <div class="w3-third">
            <a href="profile3" ><img src="{{url('img/traditional music.png')}}" class="w3-circle w3-btn" alt="Random Name" style="width:80%"></a>
        <h1 class="w3-stackyard">Yudhoyono</h1><h4 class="w3-dinlight">music</h4>
          </div>
        </div>
      </div>
      {{-- End of Coach Profile --}}

      </div>
    </div>


  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script type="text/javascript">
  var slideIndex = {{$hals}};

  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  </script>
@endsection
