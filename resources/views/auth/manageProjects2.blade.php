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

          <!-- Project edit or delete-->
          <div class="panel panel-danger">
              <div class="panel-heading">
                  Manage project here
              </div>

              <div class="panel-body">
                <!--Table of project-->
                  <h2>Edit or remove your posts</h2>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Post created</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tari Genggong</td>
                        <td>1 Juni 1998</td>
                        <td class="pull-right">
                          <button type="button" class="btn btn-warning">Edit</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <td>Tari-tarian</td>
                        <td>2 Juni 1997</td>
                        <td class="pull-right">
                          <button type="button" class="btn btn-warning">Edit</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <td>Asal Nari</td>
                        <td>3 Juni 1996</td>
                        <td class="pull-right">
                          <button type="button" class="btn btn-warning">Edit</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                <!--End of Table-->
          </div>

      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

@endsection
