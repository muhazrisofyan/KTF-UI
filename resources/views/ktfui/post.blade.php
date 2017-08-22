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
    <img src="img/4.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>UI ART WAR 2014</b></h3>
      <h5>Membawa pulang juara 1 tari, <span class="w3-opacity">May 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>UI Art War merupakan salah satu program kerja dari Departemen Seni dan Budaya Badan Eksekutif Mahasiswa UI yang selalu mendapatkan respon positif setiap tahunnya. Sebagai acara seni terbesar se-UI ini UI Art War selalu mendapatkan respon yang luar biasa dari seluruh kalangan civitas UI.</p>

	<p>Pada tahun ini, UI Art War mengangkat tema “Karya Selaras Rupa”. Melalui tema ini, panitia UI Art War berharap agar setiap insan di UI dapat mengembangkan bakat seni yang terpendam untuk dapat diwujudkan dalam karya yang selaras dengan imaji tiada batas. Kegiatan ini rutin diikuti oleh 14 Fakultas di UI, di antaranya; Fakultas Kedokteran, Fakultas Kedokteran gigi, Fakultas Hukum, Fakultas Ilmu Sosial dan Politik, Fakultas Kesehatan Masyarakat, Fakultas Psikologi, Fakultas Ilmu Pengetahuan Budaya, Fakultas Ekonomi, Fakultas Matematika dan Ilmu Pengetahuan Alam, Fakultas Ilmu Keperawatan, Fakultas Teknik, Fakultas Ilmu Komputer, Fakultas Vokasi, Fakultas Farmasi.</p>

	<p>Sebagai salah satu peserta dalam acara UI Art War ini, kami Komunitas Tari Fisip Universitas Indonesia ( KTF UI ) juga memberikan andil sebagai wakil dari FISIP UI dalam menyumbangkan sebuah karya seni berupa tarian tradisional yang dipadu dengan tari modern dan kontemporer dan diiringi dengan musik live. Dengan bangga kami mempersembahkan karya kami yang berjudul “ Dzahab Najwan ”.</p>
	<p>“Dzahab Najwan” merupakan sebuah tari kreasi yang diadaptasi dari daerah Melayu yang kental dengan nuansa Islami. Tarian ini merupakan hasil kreasi kolaborasi antara tari dan tatanan musik dari Kak Jamilah Siregar sebagai penata gerak dan Bang Imam Firmansyah sebagai penata musik. Tarian ini meceritakan tentang keharmonisan dan kedinamisan umat manusia dalam kehidupan bermasyarakat sehingga menghasilkan satu paham tauladan yang mengajarkan hidup secara damai dan tentram. Adanya keberagaman tiap individu dalam berekspresi tidak menjadikannya hambatan, namun keberagaman itu menjadi pemersatu sebagai keutuhan dalam sebuah karya. Secara garis besar, tarian ini menggambarkan bahwa kita dapat mengekspresikan seni secara bebas tidak terpaku dalam kondisi yang kaku dan terbatas. Adanya perbedaan dalam mengekspresikan seni justru menjadi alat pemersatu.</p>
	<p>Dan yang sangat membanggakan bagi kami adalah bisa membawa pulang piala sebagai Juara I Tari dalam acara seni UI Art War 2014 ini. Semua ini dapat tercapai berkat usaha maksimal dari para penari dan pemusik serta bantuan dari semua crew yang terlibat dalam

menyukseskan penampilan ini.</p>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
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
        <a href="post"><img src="img/1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <a href="post"><img src="img/2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li>
      <li class="w3-padding-16">
        <a href="post"><img src="img/3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <a href="post"><img src="img/4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
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
