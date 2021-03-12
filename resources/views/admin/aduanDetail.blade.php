@extends('lay.admin')
@section('title')
@section('css')
@section('body')

@section('content')

<div class="row">
<div class="col-md-7">
<div class="card card-primary">
<div class="card-header"><h4>Aduan Dari : {{ $data->user->nama }}</h4></div>
<div class="card-body">
<form method="POST" action="/proses_registrasi">
@csrf
    <div class="form-group">
    <label for="tanggal">Tanggal & Tahun</label>
    <input id="tanggal" type="text" class="form-control" name="tanggal" readonly value="{{ $data->tanggal }}">
    <div class="invalid-feedback">
    </div>
    </div>
    <div class="form-group">
    <label for="judul">Judul</label>
    <input id="judul" type="text" class="form-control" name="judul" readonly value="{{ $data->judul }}">
    <div class="invalid-feedback">
    </div>
    </div>
    <div class="form-group">
    <label for="judul">Isi Pengaduan</label>
    <input id="judul" rows="3" type="text" class="form-control" name="judul" readonly value="{{ $data->isi }}">
    <div class="invalid-feedback">
    </div>
    </div>
 
    {{-- <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg btn-block">
        INPUT USER
    </button>
    </div> --}}

</form>
</div>
</div>
</div>


<div class="col-md-5">
<div class="card card-primary">
<div class="card-header">
  <h4>STATUS ADUAN</h4>
</div>
<div class="card-body">
    <div class="form-group">
        @if($data->status = 'PROSES')
        <span class="ml-4 btn btn-warning btn-block">
        @elseif($data->status = 'TERIMA')
            <span class="ml-4 btn btn-success btn-block">
        @elseif($data->status = 'TOLAK')
        <span class="ml-4 btn btn-danger btn-block">
        @else
        <span>
        @endif
        {{ $data->status }}
        </span>
    </div>

</div>
</div>

<div class="card card-primary">
<div class="card-header">
  <h4>Tanggapan Anda</h4>
</div>
<div class="card-body">
    <div class="form-group">
    <label for="tanggapan">Tanggapan Anda</label>
    <textarea class="form-control" id="tanggapan" name="tanggapan" value="{{ old('tanggapan') }}" rows="3"></textarea>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary float-right">
        Tanggapi
    </button>
    </div>

</div>
</div>
</div>


</div>

@endsection

@section('footer')




