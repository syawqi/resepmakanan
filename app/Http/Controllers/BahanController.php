<?php

namespace App\Http\Controllers;

use App\Resepdetail;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index($id)
    {
        $bahan = Resepdetail::where('resep_id', $id)->get();

        return view('bahan.index', compact('bahan', 'id'));
    }

    public function form($id, $bahan_id=null){
        $bahan = null;
        $method = 'POST';
        if ($bahan_id){
            $bahan = Resepdetail::find($bahan_id);
            $method = 'POST';
            return view('bahan.form', compact('bahan', 'method'));
        }
        return view('bahan.form', compact('bahan', 'method'));
    }

    public function save($id, $bahan_id=null){
        if ($bahan_id){
            $bahan = Resepdetail::find($bahan_id);
        }else{
            $bahan = new Resepdetail();
        }

        $bahan->resep_id = $id;
        $bahan->bahan = request()->bahan;
        $bahan->unit = request()->unit;
        $bahan->qty = request()->qty;

        $bahan->save();

        return redirect('bahan/'.$id);

    }

    public function delete($id, $bahan_id){
        $bahan = Resepdetail::find($bahan_id);
        $bahan->delete();
        return redirect('bahan/'.$id);
    }
}
