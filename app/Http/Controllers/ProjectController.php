<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class ProjectController extends Controller
{
  public function create(Request $req){

    $ptable = Projects::all();
    $pcount = Projects::count();
    $id = $ptable[$pcount - 1]['id'] + 1;
    $title = $req->title;
    $content = $req->content;

    foreach ($req->photos as $photo) {
            $filename = $photo->store('project_img/' . $id);
    }
    // $req->file('photos[]'[0])->store();

    $project = new Projects;
    $project->id = $id;
    $project->title = $title;
    $project->content = $content;
    $project->snippet = 'snippet-' . $id;
    $project->save();

    return redirect('/radhasarisha/createProject');
  }

  public function show(Request $req){
    $projects = Projects::all();
    return view('auth.manageProjects', ['projects'=>$projects]);
  }
}
