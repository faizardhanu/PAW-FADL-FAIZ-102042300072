@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <!-- ==================4================== -->
            <!-- Tambahkan foto ke public/images, lalu tentukan pathnya -->
            <img src="{{ asset($mahasiswa->foto) }}" alt="Foto Profil" class="rounded-circle border border-white" width="100" height="100" style="object-fit: cover; background-color: red;">
        </div>


        <!-- ==================5================== -->
        <!-- Buat file tampilan yang akan menampilkan data mahasiswa dalam bentuk tabel -->
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $mahasiswa->email }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>{{ $mahasiswa->fakultas }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
