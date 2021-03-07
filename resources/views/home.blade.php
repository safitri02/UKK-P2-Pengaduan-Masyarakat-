@extends('lay.user')
@section('header')
@section('title', 'E-Complaint')

@section('content')
    {{-- Navbar --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#">Tentang</a>
      <a class="nav-link" href="#">Kontak</a>
      <a class="button mr-5" href="/masuk">Masuk</a>
    </div>
  </div>
</nav>
{{-- End Navbar --}}

{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="text">
    <h1>Pusat Pelayanan Pengaduan Masyarakat</h1>
    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/masuk" class="button">Masuk</a>
    </div>
  </div>
</div>
{{-- End Jumbotron --}}
<div class="col-md-8 offset-2">
<div class="control-panel shadow">
    <div class="row">
        <div class="col-md">1</div>
        <div class="col-md">1</div>
        <div class="col-md">1</div>
    </div>
</div>
</div>

{{-- Container --}}
<div class="container mb-5">
<div class="tentang mt-8">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ url('asset/img/about.png') }}">
        </div>
        <div class="col-md-6">
            <div class="capt ml-5 mt-3">
            <h3>Tentang <span>E-Complaint</span></h3>
            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="button mt-3">Selengkapnya</button>
            </div>
        </div>
    </div>
</div>

<div class="pengaduan">
<h3 class="mt-5 text-center">Semua Pengaduan</h3>

<div class="row">
    <div class="col-md-3">
        <div class="card shadow" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
    </div>
</div>

</div>

</div>
{{-- End Container --}}

<div class="registrasi mb-5">
  <h3>Belom Punya Akun?</h3>
  <button class="button2">Buat Akun</button>
</div>


@endsection

@section('footer')
