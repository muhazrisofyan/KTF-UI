<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Projects;

class ProjectController extends Controller
{
  public function create(Request $req){

    $this->validate($req, [
      'title'   => 'required|max:100',
      'content' => 'required',
      'photos'  => 'required'
    ]);

    $ptable = Projects::all();
    $pcount = Projects::count();
    $id = $ptable[$pcount - 1]['id'] + 1;
    $title = $req->title;
    $content = $req->content;

    $counter = 1;
    foreach ($req->photos as $photo) {
            $filename = $photo->storeAs('public/project_img/' . $id, $counter . '.png');
            $counter = $counter + 1;
    }
    // $req->file('photos[]'[0])->store();

    $project = new Projects;
    $project->id = $id;
    $project->title = $title;
    $project->content = $content;
    $project->snippet = 'snippet-' . $id;
    $project->save();

    return redirect()->back()->with('message', 'Project has been added!');
  }

  public function show(Request $req){
    $projects = Projects::all();
    return view('auth.manageProjects', ['projects'=>$projects]);
  }

  public function showIndex(Request $req){
    $projects = Projects::all();
    return view('ktfui.projects', ['projects'=>$projects]);
  }

  public function showId($id){
    $project = Projects::find($id);
    $images = Storage::files('public/project_img/' . $id);
    for ($i=0; $i < count($images); $i++) {
      $image_split = explode('/', $images[$i]);
      $images[$i] = $image_split[count($image_split) - 1];
    }
    return view('auth.editProject', ['project'=>$project, 'images' => $images]);
  }

  public function post($id){
    $project = Projects::find($id);
    $images = Storage::files('public/project_img/' . $id);
    for ($i=0; $i < count($images); $i++) {
      $image_split = explode('/', $images[$i]);
      $images[$i] = $image_split[count($image_split) - 1];
    }
    return view('ktfui.post', ['project'=>$project, 'images' => $images]);
  }

  public function edit(Request $req, $id)
  {
    $this->validate($req, [
      'title'   => 'required|max:100',
      'content' => 'required'
    ]);

    $counter = count(Storage::allFiles('public/project_img/' . $id)) + 1;
    if (count($req->photos) > 0) {
      foreach ($req->photos as $photo) {
              $filename = $photo->storeAs('public/project_img/' . $id, $counter . '.png');
              $counter = $counter + 1;
      }
    }


    $title = $req->title;
    $content = $req->content;

    Projects::find($id)->update([
      'title' => $req->title,
      'content' => $req->content
    ]);


    return redirect('/radhasarisha/manageProjects')->with('message', 'Post with id ' . $id . ' has been updated!');
  }

  public function delete($id){
    Projects::find($id)->delete();
    Storage::deleteDirectory('public/project_img/' . $id);
    return redirect()->back()->with('message', 'Project with id ' . $id . ' has been deleted!');
  }

  public function deleteImage($id, $img){
    Storage::delete('public/project_img/' . $id . '/' . $img);
    return redirect()->back()->with('message', 'Image has been deleted!');
  }
}
