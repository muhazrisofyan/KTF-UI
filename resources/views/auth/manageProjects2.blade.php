@extends('auth.masterAdmin')

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Manage your project</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">


      <br>
      <div class="col-lg-12">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  Add new post
              </div>

              <div class="panel-body">

                <div class="form-group">
                  <label for="usr">Title:</label>
                  <input type="text" class="form-control" id="usr">
                </div>

                <form action="/upload" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    Pictures(can attach more than one):
                    <br />
                    <input type="file" id="files" name="photos[]" multiple/>
                    <input type="submit" value="Upload" />
                </form>

                <div class="form-group" style="padding-top:20px">
                  <label for="comment">Content:</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
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
