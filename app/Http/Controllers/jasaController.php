<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jasa;
use Session;

class jasaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $jasa = jasa::latest()->paginate(5);
        return view('masterJasa.index', compact('jasa'));
    }

    public function create(){
        return view('masterJasa.create');
    }

    public function store(Request $request){
        $jasa = new jasa;
        $jasa->nama = $request->nama;
        $jasa->deskripsi = $request->deskripsi;
        $jasa->urlslug = str_slug($request->nama,'-');
        $jasa->save();
        Session::flash('messages', 'Data telah ditambah');
        return redirect()->route('masterJasa.index');        
    }

    public function show($id){

    }

    public function edit($id){
        $jasa = jasa::find($id);
        return view('masterJasa.edit', compact('jasa'));
    }

    public function update(Request $request, $id){
        $jasa = jasa::find($id);
        $jasa->nama = $request->nama;
        $jasa->deskripsi = $request->deskripsi;
        $simpan = $jasa->save();
        Session::flash('messages', 'Data telah diubah');
        return redirect()->route('masterJasa.index');
    }

    public function destroy($id){
        $jasa = jasa::find($id);
        $jasa->delete();
        Session::flash('messages', 'Data telah dihapus');
        return redirect()->route('masterJasa.index');        
    }
}
