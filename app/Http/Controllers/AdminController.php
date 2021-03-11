<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::orderBy('created_at', 'DESC')->paginate(10);
        $aduan = Pengaduan::with('user')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.index', compact('data', 'aduan'));
    }
}
