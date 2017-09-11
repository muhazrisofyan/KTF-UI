@extends('auth.masterAdmin')

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Create Project</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">


      <br>
      <div class="col-lg-12">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  Create new project
              </div>

              <div class="panel-body">

                <div class="form-group">
                  <label for="usr">Title:</label>
                  <input type="text" class="form-control" id="usr">
                </div>

                <div class="form-group" style="padding-top:20px">
                  <label for="comment">Content:</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>

                <form action="/upload" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="comment">Pictures (can attach more than one):</label>

                    <br />
                    <input type="file" id="pictures" name="photos[]" multiple/>
                </form>
              </div>

              <div class="panel-footer">
                <button type="button" class="btn btn-primary">Add</button>
              </div>
          </div>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
