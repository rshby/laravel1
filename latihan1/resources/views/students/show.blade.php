@extends('layout/base')

@section('tittle', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3">Detail Mahasiswa</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{url('/students')}}" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection