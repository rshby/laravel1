@extends('layout/base')

@section('tittle', 'Web Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Daftar Mahasiswa</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->email}}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="" class="badge badge-warning p-2">Edit</a>
                            <a href="" class="badge badge-danger p-2">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <h1>Form</h1>
        </div>
    </div>
</div>
@endsection