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
      'message'  => 'required',
      'g-recaptcha-response' => 'required'
    ]);

    $message = new Messages;
    $message->name = $req->name;
    $message->email = $req->email;
    $message->messages = $req->message;
    $message->save();

    return redirect()->back()->with('message', 'Message has been sent!');
  }
}
