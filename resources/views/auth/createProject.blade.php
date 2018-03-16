@extends('auth.masterAdmin')

@section('content')
  <div class="row">
    @if(session()->has('message'))
    <div class="alert alert-success">
      <span class="fa-stack fa-lg close-button">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
        <strong>Success! </strong>{{ session()->get('message') }}
    </div>
    @endif

    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          <span class="fa-stack fa-lg close-button">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-times fa-stack-1x fa-inverse"></i>
          </span>
            <strong>Failed!</strong> {{$error}}
        </div>
      @endforeach
    @endif
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



                <form action="/project/create" method="post" enctype="multipart/form-data">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Project Title" value="{{old('title')}}">
                    </div>

                    <div class="form-group">
                      <label for="snippet">Snippet</label>
                      <input type="text" class="form-control" id="snippet" name="snippet" placeholder="Project Snippet" value="{{old('snippet')}}">
                    </div>

                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" rows="5" id="summernote" name="content" placeholder="Project Content">{{old('content')}}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="comment">Pictures (can attach more than one):</label>
                      <input type="file" id="pictures" name="photos[]" multiple/ >
                    </div>

                    <div class="form-group" style="width:300px">
                      <label for="room">Choose Tag</label>
                      <select id="room" class="form-control" name="room" required>
                        <option value="" disabled selected></option>
                        <option value="Misi Budaya">Misi Budaya</option>
                        <option value="Pagelaran">Pagelaran</option>
                        <option value="Lomba">Lomba</option>
                      </select>
                    </div>
                    <div class="form-group" style="width:80px">
                      <button id="add" type="button" name="button" class="form-control btn btn-default pull-right">Add Tag</button>
                    </div>
                    <div id="container" class="form-group">
                      <label>Added Tag</label>
                    </div>
                  </div>

                  <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                      {{ csrf_field() }}
                  </div>
                </form>



          </div>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
