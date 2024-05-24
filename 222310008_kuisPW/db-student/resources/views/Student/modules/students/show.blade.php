@extends('Student.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">Nama :</span>
            <h2>{{ $data->fullname }}</h2>
        </div>
        <div class="npm mt-4">
            <span class="text-secondary">NPM :</span>
            <h2>{{ $data->npm }}</h2>
        </div>
        <div class="email mt-4">
            <span class="text-secondary">Email :</span>
            <h2>{{ $data->email }}</h2>
        </div>
        <div class="prodi mt-4">
            <span class="text-secondary">Prodi :</span>
            <h2>{{$data->prodi}}</h2>
        </div>
    </div>
@endsection
