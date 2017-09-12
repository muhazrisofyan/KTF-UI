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


                <form action="/project/create" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="usr">Title:</label>
                    <input type="text" class="form-control" id="usr">

                    <label for="comment">Content:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>

                    <label for="comment">Pictures (can attach more than one):</label>
                    <br />
                    <input type="file" id="pictures" name="photos[]" multiple/>
                    <br>
                      <button type="submit" class="btn btn-primary">Add</button>

                </form>
              </div>


          </div>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
