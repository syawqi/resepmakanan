<?php

namespace App\Http\Controllers;

use App\Resep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep = Resep::all();
//        return $resep;
        return view('home', compact('resep'));
    }

    public function detail($id)
    {
        $resep = Resep::with('resepdetail', 'make')->find($id);
        return view('detail', compact('resep'));
    }

    public function form($id=null){
        $resep = null;
        $method = 'POST';
        if ($id){
            $resep = Resep::find($id);
            $method = 'POST';
            return view('form', compact('resep', 'method'));
        }
        return view('form', compact('resep', 'method'));
    }

    public function save($id=null){
    if ($id){
        $resep = Resep::find($id);
    }else{
        $resep = new Resep;
    }
    $resep->name = request()->name;
    $resep->writter = request()->writter;

    $resep->save();

    return redirect('/');

}

    public function delete($id){
        $resep = Resep::find($id);
        $resep->delete();
        return redirect('/');
    }
}
