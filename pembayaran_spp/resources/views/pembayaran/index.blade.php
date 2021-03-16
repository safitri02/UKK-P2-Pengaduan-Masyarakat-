@extends('lay.temp')
@section('header')
@section('title', '')
@section('navbar')
@section('sidebar')

@section('content')

<div class="container">
<div class="card">
    <div class="card-header">  <h4>Input Pembayaran</h4> </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="id_siswa" id="id_siswa" class="col-form-label">Nama Siswa</label>
                            <select class="js-example-basic-single" name="id_siswa">
                                @foreach ($siswa as $s)
                                    <option name="id_siswa" value="{{ $s->id }}">{{ $s->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="id_spp" class="col-form-label">Nominal Spp</label>
                             <input type="text" class="form-control" name="id_spp" id="id_spp" autocomplete="off" autofocus readonly="" value="Rp.300,000">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="id_bulan" class="col-form-label">Bulan Bayar</label>
                            <select class="js-example-basic-single" name="id_bulan">
                                @foreach ($bulan as $b)
                                <option name="id_bulan" value="{{ $b->id }}">{{ $b->bulan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">Bayar Sekarang</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('footer')