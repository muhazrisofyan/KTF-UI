<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessagesController extends Controller
{
  public function show(){
    $messages = Messages::all();
    return view('auth.messages', ['messages' => $messages]);
  }

  public function send(Request $req){
    $this->validate($req, [
      'name'   => 'required|max:25',
      'email' => 'required',
      'message'  => 'required'
    ]);

    $mtable = Messages::all();
    $mcount = Messages::count();
    if ($mcount == 0) {
      $id = 1;
    }else {
      $id = $mtable[$mcount - 1]['id'] + 1;
    }

    $message = new Messages;
    $message->id = $id;
    $message->name = $req->name;
    $message->email = $req->email;
    $message->messages = $req->message;
    $message->save();

    return redirect()->back()->with('message', 'Message has been sent!');
  }

  public function delete($id){
    Messages::find($id)->delete();
    return redirect()->back()->with('message', 'Message with id ' . $id . ' has been deleted!');
  }
}
