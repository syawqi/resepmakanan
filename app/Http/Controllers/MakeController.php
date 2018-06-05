<?php

namespace App\Http\Controllers;

use App\Make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    public function index($id)
    {
        $make = Make::where('resep_id', $id)->get();

        return view('make.index', compact('make', 'id'));
    }

    public function form($id, $make_id=null){
        $make = null;
        $method = 'POST';
        if ($make_id){
            $make = Make::find($make_id);
            $method = 'POST';
            return view('make.form', compact('make', 'method'));
        }
        return view('make.form', compact('make', 'method'));
    }

    public function save($id, $make_id=null){
        if ($make_id){
            $make = Make::find($make_id);
        }else{
            $make = new Make;
        }

        $make->resep_id = $id;
        $make->step = request()->step;

        $make->save();

        return redirect('make/'.$id);

    }

    public function delete($id, $make_id){
        $make = Make::find($make_id);
        $make->delete();
        return redirect('make/'.$id);
    }
}
