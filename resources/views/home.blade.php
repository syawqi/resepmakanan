@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resep</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="container">
                    <a class="pull-right" href="{{url('resep/tambah')}}">Tambah</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Penulis</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($resep as $index => $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->writter }}</td>
                                    <td>
                                        <a href="{{ url('resep/detail', $item->id) }}">Detail</a>
                                        <a href="{{ url('resep/edit', $item->id) }}">Edit</a>
                                        <a href="{{ url('resep/delete', $item->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
