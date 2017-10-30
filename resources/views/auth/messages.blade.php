@extends('auth.masterAdmin')

@section('content')
  <div class="row">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <strong>Success! </strong>{{ session()->get('message') }}
    </div>
    @endif
      <div class="col-lg-12">
          <h1 class="page-header">Messages</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">


      <br>
      <div class="col-lg-12">

          <!-- Project edit or delete-->
          <div class="panel panel-primary">
              <div class="panel-heading">
                  Messages from user
              </div>

              <div class="panel-body">
                <!--Table of project-->
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Messages</th>
                        <th>Time</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($messages as $message)

                      <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->messages}}</td>


                        <td>
                          {{-- <a href="/radhasarisha/editProject/{{$project->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                          <a href="/project/delete/{{$project->id}}"><button type="button" class="btn btn-danger">Delete</button></a> --}}
                          {{$message->created_at}}
                        </td>
                        <td class = "pull-right"><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
