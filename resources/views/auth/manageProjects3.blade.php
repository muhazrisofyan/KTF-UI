@extends('auth.masterAdmin')

@section('content')
  <div class="row">
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

              <div class="panel-body">

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                  <label for="hp">Phone number</label>
                  <input type="text" class="form-control" id="hp">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email">
                </div>
              </div>

              <div class="panel-footer">
                <button type="button" class="btn btn-primary">Save</button>
              </div>
          </div>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
