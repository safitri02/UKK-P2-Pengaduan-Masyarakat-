<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Spp;
Use Validator;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::with('jurusan', 'spp', 'kelas')->orderBy('created_at', 'DESC')->get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        $spp = Spp::all();

        return view('siswa.tambah', compact('jurusan', 'kelas', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // die;
        $request->validate([
            'nisn' => 'required|integer',
            'nama' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'id_spp' => 'required'
        ]);

        $siswa = new Siswa;
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        $siswa->id_spp = $request->id_spp;
        $siswa->save();

        return redirect('/siswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa, $id)
    {
        $data = Siswa::with('kelas', 'jurusan', 'spp');
        // return $data;
        // die;
        return view('/siswa/detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
