@extends('auth.masterAdmin')

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Dashboard</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  {{-- <div class="row"> --}}
    <h1>Welcome, Admin!</h1>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>             {{-- </div> --}}
  <!-- /.row -->

@endsection
