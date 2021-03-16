@extends('lay.temp')
@section('header')
@section('title', 'Daftar Siswa')
@section('navbar')
@section('sidebar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
            <h4>Data Siswa</h4>
            </div>
            <div class="card-body">
            <a href="/admin/tambah_siswa" class="btn btn-success btn-sm mb-2">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                <tbody><tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th> Nisn </th>
                    <th>Kelas & Jurusan</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1; ?>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->kelas->kelas }} {{ $s->jurusan->jurusan }}</td>
                    <td>
                        <a href="" class="badge badge-danger">Hapus</a>
                        <a href="/siswa/detail/{{ $s->id }}" class="badge badge-primary">Detail</a>
                        <a href="" class="badge badge-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                    {{-- {{ $siswa->links() }} --}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')

