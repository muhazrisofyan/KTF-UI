@extends('auth.masterAdmin')

@section('content')
  <div class="row">
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
      <div class="col-lg-12">
          <h1 class="page-header">Contact Person</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">


      <br>
      <div class="col-lg-12">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  Edit contact person
              </div>

              <form action="/contactupdate" method="post">
                  <div class="panel-body">

                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name" value="{{$nama}}" id="name">
                      </div>

                      <div class="form-group">
                          <label>Phone number</label>
                          <input type="text" class="form-control" name="hp" value="{{$phonenumber}}" id="hp">
                      </div>

                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" name="email" value="{{$email}}" id="email">
                      </div>

                  </div>

                  <div class="panel-footer">
                      <button class="btn btn-primary" type="submit" name="save" value="Save">Save</button>
                      {{ csrf_field() }}
                  </div>
              </form>
          </div>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
