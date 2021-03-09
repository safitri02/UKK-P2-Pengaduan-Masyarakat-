<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
      return view('login.login');
   }

   public function proses_masuk(Request $req)
   {
      $email = $req->email;
      $password = $req->password;

      if(Auth::attempt(['email' => $email, 'password' => $password])){
         return redirect('/masyarakat');
      } else{
         return back();
      }
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
        'password' => Hash::make($req->password),
        'telp' => $req->telp,
        'alamat' => $req->alamat
     ]);

      return redirect('/masuk');

   }

   public function keluar()
   {
      Auth::logout();
      return redirect('/');
   }


}
