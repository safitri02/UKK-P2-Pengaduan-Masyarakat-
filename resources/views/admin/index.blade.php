@extends('lay.admin')
@section('title')
@section('css')
@section('body')

@section('content')

<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
  <div class="card card-statistic-1">
    <div class="card-icon bg-primary">
      <i class="far fa-user mt-4"></i>
    </div>
    <div class="card-wrap">
      <div class="card-header">
        <h4>Total User</h4>
      </div>
      <div class="card-body">
        10
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
  <div class="card card-statistic-1">
    <div class="card-icon bg-primary">
      <i class="far fa-newspaper mt-4"></i>
    </div>
    <div class="card-wrap">
      <div class="card-header">
        <h4>Total Aduan</h4>
      </div>
      <div class="card-body">
        10
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
  <div class="card card-statistic-1">
    <div class="card-icon bg-primary">
      <i class="far fa-newspaper mt-4"></i>
    </div>
    <div class="card-wrap">
      <div class="card-header">
        <h4>Total Aduan</h4>
      </div>
      <div class="card-body">
        10
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
  <div class="card card-statistic-1">
    <div class="card-icon bg-primary">
      <i class="far fa-newspaper mt-4"></i>
    </div>
    <div class="card-wrap">
      <div class="card-header">
        <h4>Total Aduan</h4>
      </div>
      <div class="card-body">
        10
      </div>
    </div>
  </div>
</div>

</div>


<div class="row">

<div class="col-md-5">
<div class="card card-primary">
<div class="card-header">
  <h4>Semua Data Masyarakat</h4>
</div>
<div class="card-body">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no = 1; ?>
    @foreach($data as $d)
      <tr>
        <th>{{ $no++ }}</th>
        <td>{{ $d->nama }}</td>
        <td>
        <a href="/masyarakat/detail/{{ $d->id }}"><i class="fa fa-eye"> </i></a>
        <a href="/masyarakat/detail/{{ $d->id }}"><i class="fa fa-edit ml-3"> </i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>

<div class="col-md-7">
<div class="card card-primary">
<div class="card-header">
  <h4>Semua Data Aduan</h4>
</div>
<div class="card-body">
 <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Dari</th>
        <th scope="col">Aduan</th>
        <th scope="col">Status</th>
         <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no = 1; ?>
    @foreach($aduan as $a)
      <tr>
        <th>{{ $no++ }}</th>
        <td>{{ $a->user->nama }}</td>
        <td>{{ $a->judul }}</td>
        <td>
          @if($a->status == "PROSES")
          <span class="badge badge-warning">
          @elseif($a->status == "DITERIMA")
          <span class="badge badge-success">
          @else
         <span>
         @endif
         {{ $a->status }}
         </span>
        </td>
        <td>
          <a href="/pengaduan/detail/{{ $d->id }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"> </i></a>
          {{-- <a href="/masyarakat/detail/{{ $d->id }}" class="btn btn-success btn-sm"><i class="fa fa-check ml-3"> </i></a> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>

</div>



@endsection
@section('footer')

