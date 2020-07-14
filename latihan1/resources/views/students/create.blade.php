@extends('layout/base')

@section('tittle', 'Tambah Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3">Form Tambah Data Mahasiswa</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <form method="post" action="{{url('/students')}}">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Example input nama" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Example input nim" name="nim">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" id="email" placeholder="Example input email" name="email">
                </div>
                <div class="form-group">
                    <label>jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Example input jurusan" name="jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection