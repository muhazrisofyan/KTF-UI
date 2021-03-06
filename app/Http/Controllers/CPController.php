<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cp;

class CPController extends Controller
{
    public function change(Request $req)
    {
      $this->validate($req, [
        'name' => 'required|max:20',
        'hp' => 'required|max:15',
        'email' => 'required'
      ]);

      $nama = $req->name;
      $phonenumber = $req->hp;
      $email = $req->email;

      cp::find(1)->update([
        'nama' => $req->name,
        'hp' => $req->hp,
        'email' => $req->email
      ]);


      return redirect()->back()->with('message', 'Contact Person has been updated!');
    }

    public function show()
    {
      $tab = cp::all();
      $nama = $tab[0]['nama'];
      $phonenumber = $tab[0]['hp'];
      $email = $tab[0]['email'];

      return view('ktfui.contact',['nama'=>$nama,'phonenumber'=>$phonenumber, 'email'=>$email]);

    }

    public function show2()
    {
      $tab = cp::all();
      $nama = $tab[0]['nama'];
      $phonenumber = $tab[0]['hp'];
      $email = $tab[0]['email'];

      return view('auth.editCP',['nama'=>$nama,'phonenumber'=>$phonenumber, 'email'=>$email]);

    }
}
