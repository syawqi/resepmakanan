@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cara Membuat</div>

                    <div class="card-body">
                        <div class="container">
                            <a class="pull-right" href="{{url('make/tambah', $id)}}">Tambah</a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Langkah</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($make as $index => $item)
                                    <tr>
                                        <td>{{ $item->step }}</td>

                                        <td>
                                            <a href="{{ url('make/'. $id .'/edit', $item->id) }}">Edit</a>
                                            <a href="{{ url('make/'. $id .'/delete', $item->id) }}">Delete</a>
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
