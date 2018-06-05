@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah / Edit Resep</div>

                    <div class="card-body">
                        <div class="container">
                            <form method={{ $method }}>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Bahan</label>
                                    <input class="form-control" name="bahan" placeholder="Nama Bahan" value={{ $bahan ?  $bahan->bahan : ''  }}>
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input class="form-control" name="unit" placeholder="Satuan" value={{ $bahan ?  $bahan->unit : ''  }}>
                                </div>
                                <div class="form-group">
                                    <label>Banyak</label>
                                    <input class="form-control" name="qty" placeholder="Banyak" value={{ $bahan ?  $bahan->qty : ''  }}>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
