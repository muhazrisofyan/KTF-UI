<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cp;

class CPController extends Controller
{
    public function change(Request $req)
    {
      $nama = $req->name;
      $phonenumber = $req->hp;
      $email = $req->email;
      if (($nama == null)||($phonenumber==null)||($email==null)) {
        return view('auth.manageProjects3f',['nama'=>$req->name,'phonenumber'=>$req->hp, 'email'=>$req->email]);
      }

      cp::find(1)->update([
        'nama' => $req->name,
        'hp' => $req->hp,
        'email' => $req->email
      ]);


      return redirect('/radhasarisha/manageprojects3');
    }

    public function show()
    {
      $tab = cp::all();
      $nama = $tab[0]['nama'];
      $phonenumber = $tab[0]['hp'];
      $email = $tab[0]['email'];

      return view('ktfui.contact',['nama'=>$nama,'phonenumber'=>$phonenumber, 'email'=>$email]);

    }

    public function showw()
    {
      $tab = cp::all();
      $nama = $tab[0]['nama'];
      $phonenumber = $tab[0]['hp'];
      $email = $tab[0]['email'];

      return view('auth.manageProjects3',['nama'=>$nama,'phonenumber'=>$phonenumber, 'email'=>$email]);

    }
}
