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
      <a class="nav-link mr-5" href="/keluar">Keluar</a>
    </div>
  </div>
</nav>
{{-- End Navbar --}}

<div class="container mt-10 mb-5">
<div class="row">
  <div class="col-md-7">
    <div class="card none shadow">
     <div class="card-header">
      <div class="card-title"><h5>Form Pengaduan</h5></div>
    </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Judul</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Isi Pengaduan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>  
            <button type="submit" class="btn btn-primary">Ajukan</button>
          </form>
        </div>
      </div>
    </div>


<div class="col-md-5">
<div class="card shadow">
<div class="card-header">
   <div class="card-title"><h5>List Pengaduan Anda</h5></div>
</div>
   
  <div class="card-body">
   <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Pengaduan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Lihat</td>
        </tr>
      </tbody>
    </table>
  </div>
</div> 
</div>

  </div>
</div>


@endsection

@section('footer')
