@extends('layouts.master')

@section('content')
<br>
<div class="w3-center" style="padding-top:150px;padding-bottom:60px">
  <img src="img/Logo KTF.PNG" alt="logo" style="max-width:500px;width:100%">
</div>

{{-- <div class="w3-row w3-content w3-display-container w3-padding-bottom" style="padding-bottom:400px">
    <div class="w3-col w3-center w3-mobile" style="width:16.6%">
      <i class="fa fa-phone w3-circle w3-btn contactimage"></i>
      <p>Arsa (081287479610)</p>
    </div>
    <div class="w3-col w3-center w3-mobile" style="width:16.6%">
      <i class="fa fa-envelope w3-circle w3-btn contactimage"></i>
      <p>ktf.fisipui@gmail.com</p>
    </div>
    <div class="w3-col w3-center w3-mobile" style="width:16.6%">
      <a target="_blank" href="https://www.instagram.com/ktfui/">
      <i class="fa fa-instagram w3-circle w3-btn contactimage"></i>
      <p>ktfui</p>
    </div>
    <div class="w3-col w3-center w3-mobile" style="width:16.6%">
      <a target="_blank" href="https://www.youtube.com/user/KTFfisipUI08">
      <i class="fa fa-youtube w3-circle w3-btn contactimage"></i>
      <p>KTFfisipUI08</p>
    </div>
    <div class="w3-col w3-center w3-mobile" style="width:16.6%">
      <a target="_blank" href="hhttps://twitter.com/ktfui">
      <i class="fa fa-twitter w3-circle w3-btn contactimage"></i>
      <p>ktfui</p>
    </div>
    <div class="w3-col w3-center w3-mobile" style="width:16.6%">
      <a target="_blank" href="https://www.facebook.com/ktf.ui.radhasarisha">
      <i class="fa fa-facebook w3-circle w3-btn contactimage"></i>
      <p>ktf.ui.radhasarisha</p>
    </div>
</div> --}}


<div class="w3-row w3-container">
  <div class="w3-teal w3-container w3-third" style="padding-bottom:400px;margin-bottom:100px;padding-top:50px;">
    <h2>Get Social</h2>
    <div class="w3-row">
      <div class="w3-container w3-xlarge w3-center">
        <a target="_blank" href="https://www.instagram.com/ktfui/"><i class="fa fa-instagram w3-hover-opacity contactimage"></i></a>
        <a target="_blank" href="https://www.youtube.com/user/KTFfisipUI08"><i class="fa fa-youtube w3-hover-opacity contactimage"></i></a>
        <span class="w3-mobile">
        <a target="_blank" href="hhttps://twitter.com/ktfui"><i class="fa fa-twitter w3-hover-opacity contactimage"></i></a>
        <a target="_blank" href="https://www.facebook.com/ktf.ui.radhasarisha"><i class="fa fa-facebook-official w3-hover-opacity contactimage"></i></a>
        </span>
      </div>
    </div>
    <h2 style="padding-top:60px">Contact Info</h2>
    <span class="contactinfo"><i class="fa fa-phone" style="margin-left:80px;margin-top:0px;padding-top:25px">  Arsa (081287479610)</i></span>
    <br>
    <span class="contactinfo"><i class="fa fa-envelope" style="margin-left:80px">  ktf.fisipui@gmail.com</i></span>
  </div>
  <div class="w3-container w3-twothird w3-light-grey w3-display-container" style="padding-bottom:324px;margin-bottom:100px;padding-top:50px;">
    <h2 class="w3-text-teal"style="padding-bottom:25px">Get in touch with us</h2>

    <label>Your Name (Required)</label>
    <input class="w3-input w3-border-0 w3-round-large" type="text" style="margin-top:10px;">
    <br>
    <label>Your Email (Required)</label>
    <input class="w3-input w3-border-0 w3-round-large" type="text" style="margin-top:10px;">
    <br>
    <label>Your Message </label>
    <textarea class="w3-input w3-border-0 w3-round-large" type="text" rows="5" style="margin-top:10px;"></textarea>
    <button class="w3-btn w3-teal w3-display-bottomright" style="margin-right:50px;margin-bottom:50px">Submit</button>
  </div>
</div>


@endsection
