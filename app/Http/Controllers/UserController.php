<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
      return view('login.login');
   }

   public function registrasi()
   {
       return view('login.registrasi');
   }

   public function proses_registrasi(Request $req)
   {
      
      $req->validate([
         'nama' => 'required',
         'email' => 'required|email',
         'password' => 'required|min:6|confirmed',
         'telp' => 'required',
         'alamat' => 'required',
      ]);

      // return $req;
     User::create([
        'nama' => $req->nama,
        'email' => $req->email,
        'password' => $req->password,
        'telp' => $req->telp,
        'alamat' => $req->alamat
     ]);

      return redirect('/login');

   }


}
