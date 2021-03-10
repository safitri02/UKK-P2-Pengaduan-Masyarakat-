@extends('lay.user')
@section('header')
@section('title', 'E-Complaint')

@section('content')
    {{-- Navbar --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">E-Complaint</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
        <a href="/masyarakat" class="nav-link"> Pengaduan</a>
        <a class="nav-link mr-5" href="/keluar">Keluar</a>
    </div>
  </div>
</nav>
{{-- End Navbar --}}

<div class="container mt-10 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->judul }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Dari : {{ $data->user->nama }}</h6>
                    <p class="card-text">{{ $data->isi }}</p>
                    <a href="/masyarakat" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
