@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Resep {{ $resep->name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="container">
                        <h1>
                            {{ $resep->name }}
                        </h1>
                        <p>
                            Oleh {{ $resep->writter }}
                        </p>

                        <h5>
                            Bahan
                        </h5>
                        @foreach($resep->resepdetail as $index => $item)
                            <p>
                                <ul>
                                    <li>
                                        {{ $item->bahan}}

                                    </li>
                                </ul>
                            </p>
                        @endforeach
                        <h5>
                            Cara Membuat
                        </h5>
                        @foreach($resep->make as $index => $item)
                            <p>
                                <ul>
                                    <li>
                                        {{ $item->step}}
                                    </li>
                                 </ul>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
