@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bahan</div>

                    <div class="card-body">
                        <div class="container">
                            <a class="pull-right" href="{{url('bahan/tambah', $id)}}">Tambah</a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Bahan</th>
                                    <th>Unit</th>
                                    <th>Qty</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bahan as $index => $item)
                                    <tr>
                                        <td>{{ $item->bahan }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->qty }}</td>

                                        <td>
                                            <a href="{{ url('bahan/'. $id .'/edit', $item->id) }}">Edit</a>
                                            <a href="{{ url('bahan/'. $id .'/delete', $item->id) }}">Delete</a>
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
    </div>
@endsection
