@extends('layouts.master')

@section('content')
  <br><br><br>
  <h1 class="w3-jumbo w3-text-orange w3-center w3-stackyard" style="margin-top:40px"><b>Our Profile</b></h1>
  <div class="w3-container" style="margin-top:10px">

    {{-- Profile 1 --}}
    <div id="1" class="mySlides fade">
      <div class="w3-container w3-display-container">
          <img src="img/bunga2an.png" class="w3-display-topleft w3-opacity-max" style="width:45%;z-index: -1">
          <img src="img/bunga3an.png" class="w3-display-right w3-opacity-max" style="width:60%;z-index: -1">
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
                <div class="video-container">
                  <iframe style="max-width:100%;height:100%" src="https://www.youtube.com/embed/lp-EO5I60KA" ></iframe>
                </div>
            </div>
          </li>
        </ul>
      </div>
      {{-- End of Picture and Video --}}

      </div>
    </div>
    {{-- End of Profile 1 --}}
    {{--
      *
      *
      *
      *
      *
     --}}
    {{-- Profile 2 --}}
    <div id="2" class="mySlides fade">
      <div class="w3-container w3-display-container">
          <img src="img/bunga2an.png" class="w3-display-topleft w3-opacity-max" style="width:45%;z-index: -1">
          <img src="img/bunga3an.png" class="w3-display-right w3-opacity-max" style="width:60%;z-index: -1">
        {{-- Start introduction --}}
        <div class="w3-content" style="padding-top:20px;text-align:justify">
          <p>Tari tradisional Malaysia mencerminkan kekayaan dan keanekaragaman bangsa Indonesia. Beberapa tradisi seni tari seperti; tarian Bali, tarian Jawa, tarian Sunda, tarian Minangkabau, tarian Palembang, tarian Melayu, tarian Aceh, dan masih banyak lagi adalah seni tari yang berkembang sejak dahulu kala, meskipun demikian tari ini tetap dikembangkan hingga kini. Beberapa tari mungkin telah berusia ratusan tahun, sementara beberapa tari berlanggam tradisional mungkin baru diciptakan kurang dari satu dekade yang lalu. Penciptaan tari dengan koreografi baru, tetapi masih di dalam kerangka disiplin tradisi tari tertentu masih dimungkinkan. Sebagai hasilnya, muncullah beberapa tari kreasi baru. Tari kreasi baru ini dapat merupakan penggalian kembali akar-akar budaya yang telah sirna, penafsiran baru, inspirasi atau eksplorasi seni baru atas seni tari tradisional.</p>
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
                  <img class="w3-image" src="img/3.jpg" alt="Norway">
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
                <div class="video-container">
                  <iframe style="max-width:100%;height:100%" src="https://www.youtube.com/embed/lp-EO5I60KA" ></iframe>
                </div>
            </div>
          </li>
        </ul>
      </div>
      {{-- End of Picture and Video --}}

      </div>
    </div>
    {{-- End of Profile 2 --}}
    {{--
      *
      *
      *
      *
      *
     --}}
    {{-- Profile 3 --}}
    <div id="3" class="mySlides fade">
      <div class="w3-container w3-display-container">
          <img src="img/bunga2an.png" class="w3-display-topleft w3-opacity-max" style="width:45%;z-index: -1">
          <img src="img/bunga3an.png" class="w3-display-right w3-opacity-max" style="width:60%;z-index: -1">
        {{-- Start introduction --}}
        <div class="w3-content" style="padding-top:20px;text-align:justify">
          <p>Tari tradisional Inggris mencerminkan kekayaan dan keanekaragaman bangsa Indonesia. Beberapa tradisi seni tari seperti; tarian Bali, tarian Jawa, tarian Sunda, tarian Minangkabau, tarian Palembang, tarian Melayu, tarian Aceh, dan masih banyak lagi adalah seni tari yang berkembang sejak dahulu kala, meskipun demikian tari ini tetap dikembangkan hingga kini. Beberapa tari mungkin telah berusia ratusan tahun, sementara beberapa tari berlanggam tradisional mungkin baru diciptakan kurang dari satu dekade yang lalu. Penciptaan tari dengan koreografi baru, tetapi masih di dalam kerangka disiplin tradisi tari tertentu masih dimungkinkan. Sebagai hasilnya, muncullah beberapa tari kreasi baru. Tari kreasi baru ini dapat merupakan penggalian kembali akar-akar budaya yang telah sirna, penafsiran baru, inspirasi atau eksplorasi seni baru atas seni tari tradisional.</p>
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
                  <img class="w3-image" src="img/2.jpg" alt="Norway">
                  <div class="w3-container w3-center">
                    <p>The Troll's tongue in Hardanger, Norway</p>
                  </div>
                </div>
                <div class="w3-half w3-card-2 w3-content w3-padding">
                  <img class="w3-image" src="img/1.jpg" alt="Norway">
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
                <div class="video-container">
                  <iframe style="max-width:100%;height:100%" src="https://www.youtube.com/embed/lp-EO5I60KA" ></iframe>
                </div>
            </div>
          </li>
        </ul>
      </div>
      {{-- End of Picture and Video --}}

      </div>
    </div>
    {{-- End of Profile 3 --}}


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
