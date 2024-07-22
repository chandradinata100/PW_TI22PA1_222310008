@extends('member.layouts.index')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header fw-bold bg-primary text-white">
                        List of Users
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tgl Lahir</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">No. Telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $member)
                                        <tr>
                                            <th>{{ $loop->index + 1 }}</th>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->address }}</td>
                                            <td>{{ $member->birthdate }}</td>
                                            <td>{{ $member->gender }}</td>
                                            <td>{{ $member->phone }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <a href="/details/{{ $member->id }}" class="btn btn-primary btn-sm" title="View Details">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <a href="/update/{{ $member->id }}" class="btn btn-success btn-sm" title="Edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="/delete/{{ $member->id }}" class="btn btn-danger btn-sm" title="Delete"
                                                        onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    {{ $data->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                @include('member.modules.identity.create')
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .card-header {
        background-color: #007bff;
        color: #fff;
        font-size: 1.25rem;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .table thead th {
        background-color: #f8f9fa;
    }
    .btn-group .btn {
        margin-right: 5px;
    }
    .btn-group .btn:last-child {
        margin-right: 0;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>
@endpush
