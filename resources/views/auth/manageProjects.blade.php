@extends('auth.masterAdmin')

@section('content')
  <div class="row">
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
                        <th>Title</th>
                        <th>Post created</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($projects as $project)

                      <tr>
                        <td>{{$project->title}}</td>
                        <td>{{$project->created_at}}</td>
                        <td class="pull-right">
                          <button type="button" class="btn btn-warning">Edit</button>
                          <button type="button" class="btn btn-danger">Delete</button>
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
