@extends('lay.temp')
@section('header')
@section('title', 'Daftar Siswa')
@section('navbar')
@section('sidebar')

@section('content')

<div class="container">
<div class="card">
    <div class="card-header">
    <h4>Form Tambah Data Siswa</h4>
    </div>
    <div class="card-body">
    <form action="/admin/tambah_siswa" method="post">
    @csrf
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" autofocus placeholder="Nama">
    </div>
    </div>
    <div class="form-group row">
        <label for="nisn" class="col-sm-2 col-form-label">Nisn</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="nisn" id="nisn" autocomplete="off" autofocus placeholder="Nisn">
    </div>
    </div>
     <div class="form-group row">
        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
        <select class="js-example-basic-single" name="id_kelas">
            @foreach ($kelas as $k)
                 <option nama="id_kelas" value="{{ $k->id }}">{{ $k->kelas }}</option>
            @endforeach
        </select>
    </div>
    </div>
    <div class="form-group row">
        <label for="id_jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
        <select class="js-example-basic-single" name="id_jurusan">
            @foreach ($jurusan as $j)
                 <option name="id_jurusan" value="{{ $j->id }}">{{ $j->jurusan }}</option>
            @endforeach
        </select>
    </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
    </div>
    </div>
    <div class="form-group row">
        <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="kontak" id="kontak" autocomplete="off" autofocus placeholder="Email / No Telp siswa...">
    </div>
    </div>
     <div class="form-group row">
        <label for="id_spp" class="col-sm-2 col-form-label">Nominal Spp</label>
        <div class="col-sm-10">
         <select class="js-example-basic-single" name="id_spp">
            @foreach ($spp as $s)
                 <option name="id_spp" value="{{ $s->id }}">Rp.{{ number_format($s->nominal) }}</option>
            @endforeach
        </select>
    </div>
    </div>

    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
    </div>
</form>

</div>
</div>

@endsection

@section('footer')


