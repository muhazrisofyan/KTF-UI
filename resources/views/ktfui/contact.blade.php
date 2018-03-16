@extends('layouts.master')

@section('content')

<div class="w3-center" style="padding-top:150px;padding-bottom:60px">
  <img src="img/Logo KTF.PNG" alt="logo" style="max-width:500px;width:100%">
</div>

<div class="row w3-row w3-container">
  <div class="w3-orange w3-text-white w3-container w3-third" style="padding-bottom:150px;margin-bottom:100px;padding-top:0px;">
    <h1 class="w3-stackyard" style="margin-top:60px">Get Social</h1>
    <div class="w3-row">
      <div class="w3-container w3-xlarge w3-center">
        <a target="_blank" href="https://www.instagram.com/ktfui/"><i class="fab fa-instagram w3-hover-opacity contactimage"></i></a>
        <a target="_blank" href="https://www.youtube.com/user/KTFfisipUI08"><i class="fab fa-youtube w3-hover-opacity contactimage"></i></a>
        <span class="w3-mobile">
        <a target="_blank" href="https://twitter.com/ktfui"><i class="fab fa-twitter w3-hover-opacity contactimage"></i></a>
        <a target="_blank" href="https://www.facebook.com/ktf.ui.radhasarisha"><i class="fab fa-facebook-square w3-hover-opacity contactimage"></i></a>
        </span>
      </div>
    </div>
    <h1 class="w3-stackyard" style="padding-top:60px">Contact Info</h1>
    <span class="contactinfo w3-dinmed"><i class="fas fa-phone" style="margin-left:80px;margin-top:0px;padding-top:25px">  {{$nama}} ({{$phonenumber}})</i></span>
    <br>
    <span class="contactinfo w3-dinmed"><i class="fas fa-envelope" style="margin-left:80px;padding-bottom:25px;">  {{$email}}</i></span>

  </div>
  <div class="w3-container w3-twothird w3-light-grey w3-display-container" style="padding-bottom:150px;margin-bottom:100px;padding-top:50px;">
    @if (count($errors) > 0)
        <div class="w3-panel w3-pale-red w3-text-red w3-border-red w3-border w3-round-large" style="margin-top:-30px">
          <strong>Failed!</strong> Please fill in the required fields
        </div>
    @endif
    @if(session()->has('message'))
    <div class="w3-panel w3-pale-green w3-text-green w3-border w3-border-green w3-round-large" style="margin-top:-30px">
      <strong>Success! </strong>{{ session()->get('message') }}
    </div>
    @endif
    <h1 class="w3-text-orange w3-stackyard" style="padding-bottom:25px">Get in touch with us</h1>

    <form action="/sendMessage" method="post">
      <label class="w3-dinmed">Your Name <span class="w3-text-red">*</span></label>
      <input class="w3-input w3-border-0 w3-round-large" type="text" style="margin-top:10px;" name="name" autofocus>
      <br>
      <label class="w3-dinmed">Your Email <span class="w3-text-red">*</span></label>
      <input class="w3-input w3-border-0 w3-round-large" type="text" style="margin-top:10px;" name="email">
      <br>
      <label class="w3-dinmed">Your Message <span class="w3-text-red">*</span></label>
      <textarea class="w3-input w3-border-0 w3-round-large" type="text" rows="5" style="margin-top:10px;" name="message"></textarea>
      <br>
      <label class="w3-dinmed">Please verify that you are human <span class="w3-text-red">*</span></label>
      <div class="g-recaptcha" style="margin-top:10px" data-sitekey="6LdUwTAUAAAAAMkOg3qGznAVTQ1hxP5FxFvXzTQM"></div>
      <button class="w3-btn w3-orange w3-text-white w3-display-bottomright w3-round-large" style="margin-right:50px;margin-bottom:50px">Submit</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>


@endsection
