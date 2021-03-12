<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::orderBy('created_at', 'DESC')->paginate(10);
        $aduan = Pengaduan::with('user')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.index', compact('data', 'aduan'));
    }

    public function masyarakat()
    {
        $data = User::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.masyarakat', compact('data'));
    }

    public function aduan(Request $req)
    {
        $data = Pengaduan::with('user')->orderBy('created_at', 'DESC')->get();
        return view('admin.aduan', compact('data'));
    }

    public function detail(Request $req, $id)
    {
        $data = Pengaduan::with('user')->find($id)->first();
        return view('admin.aduanDetail', compact('data'));
    }

    public function status(Request $req, $id)
    {
        $req->validate([
            'status' => 'required|in:PROSES,TERIMA,TOLAK'
        ]);

        $status = Pengaduan::find($id);
        $status->status = $req->status;
        $status->save();

        return back();
    }
}

