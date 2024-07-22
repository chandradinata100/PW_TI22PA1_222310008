@extends('member.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">Email :</span>
            <h3>{{ $data->email }}</h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Nama :</span>
            <h3>{{ $data->name }}</h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Alamat :</span>
            <h3>{{ $data->address }}</h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Tgl Lahir :</span>
            <h3>{{ $data->birthdate }}</h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Jenis Kelamin :</span>
            <h3>{{ $data->gender }}</h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">No Telepon :</span>
            <h3>{{ $data->phone }}</h3>
        </div>
    </div>
@endsection
