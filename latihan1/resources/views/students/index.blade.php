@extends('layout/base')

@section('tittle', 'Web Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3">Daftar Students</h2>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <a href="{{ url('/students/create')}}" class="badge badge-primary p-3 mt-2">Tambah Data Mahasiswa</a>
            <ul class="list-group mt-3">
                @foreach ($students as $std)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $std->nama}}
                    <a href="/students/{{$std->id}}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection