@extends('templates.layout')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered border-dark">
                    <thead class="table-secondary fs-4 text-center">
                        <tr>
                            <th scope="col">Course</th>
                            <th scope="col">Type</th>
                            <th scope="col">Rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $isFirstMatkul = true;
                            $colspan = count(array_filter($data['skill'], function($item) {
                                return $item['course'] === 'Matematika';
                            }));
                        @endphp
                        @foreach ($data['skill'] as $result)
                            @if ($result['course'] === 'Matematika')
                                @if ($isFirstMatkul)
                                    <tr>
                                        <td rowspan="{{ $colspan }}">{{ $result['course'] }}</td>
                                        <td>{{ $result['type'] }}</td>
                                        <td class="text-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                            @endfor
                                        </td>
                                    </tr>
                                    @php
                                        $isFirstMatkul = false;
                                    @endphp
                                @else
                                    <tr>
                                        <td>{{ $result['type'] }}</td>
                                        <td class="text-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                            @endfor
                                        </td>
                                    </tr>
                                @endif
                            @else
                                <tr>
                                    <td>{{ $result['course'] }}</td>
                                    <td>{{ $result['type'] }}</td>
                                    <td class="text-center">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="bi bi-star{{ $i < $result['rate'] ? '-fill' : '' }}"></i>
                                        @endfor
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
