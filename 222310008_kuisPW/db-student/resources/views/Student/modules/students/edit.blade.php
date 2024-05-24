@extends('Student.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-header fw-bold ">
            <h4>Edit Data</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/update/{{ $product->id }}/edit" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nama</label>
                    <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror"
                        id="fullname" autocomplete="off" value="{{ old('fullname', $product->fullname) }}">
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <textarea name="npm" class="form-control @error('npm') is-invalid @enderror" id="npm"
                        rows="3">{{ old('npm', $product->npm) }}</textarea>
                    @error('npm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="email" class="form-label">Email</label>
                <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                        id="email" autocomplete="off" value="{{ old('email', $product->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="prodi" class="form-label">Prodi</label>
                <div class="input-group mb-3">
                    <input name="prodi" type="text" class="form-control @error('prodi') is-invalid @enderror"
                        id="prodi" autocomplete="off" value="{{old('email',$product->prodi) }}">
                    @error('prodi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
                    <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
