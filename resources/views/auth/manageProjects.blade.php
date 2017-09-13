@extends('auth.masterAdmin')

@section('content')
  <div class="row">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <strong>Success! </strong>{{ session()->get('message') }}
    </div>
    @endif
      <div class="col-lg-12">
          <h1 class="page-header">Manage Projects</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">


      <br>
      <div class="col-lg-12">

          <!-- Project edit or delete-->
          <div class="panel panel-primary">
              <div class="panel-heading">
                  Manage project here
              </div>

              <div class="panel-body">
                <!--Table of project-->
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Post created</th>
                        <th>Last Updated</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($projects as $project)

                      <tr>
                        <td>{{$project->id}}</td>
                        <td>@if (strlen($project->title) > 50)
                          {{substr($project->title, 0, 50)}}
                        @else
                          {{$project->title}}
                        @endif</td>
                        <td>{{$project->created_at}}</td>
                        <td>{{$project->updated_at}}</td>
                        <td class="pull-right">
                          <a href="/radhasarisha/editProject/{{$project->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                          <a href="/project/delete/{{$project->id}}"><button type="button" class="btn btn-danger">Delete</button></a>

                        </td>
                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                <!--End of Table-->
          </div>

      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
