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
          <h1 class="page-header">Edit Project</h1>
      </div>

      <!-- /.col-lg-12 -->
  </div>
  <div class="row">
      <br>
      <div class="col-lg-12">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  Edit your project
              </div>



                <form action="/project/edit/{{$project->id}}" method="post" enctype="multipart/form-data">
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
                    </div>

                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" rows="5" id="content" name="content">{{$project->content}}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="comment">Pictures (can attach more than one):</label>
                      <input type="file" id="pictures" name="photos[]" multiple/ >
                    </div>

                  </div>

                  <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                      {{ csrf_field() }}
                  </div>
                </form>



          </div>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
