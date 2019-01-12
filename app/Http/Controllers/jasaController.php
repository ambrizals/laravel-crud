<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jasa;

class jasaController extends Controller
{
    public function index(){
    	$jasa = jasa::latest()->paginate(5);
    	return view('jasa.index', compact('jasa'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){
    	$jasa = jasa::where('urlslug',$id)->first();
    	return view('jasa.show', compact('jasa'));
    }

    public function update(Request $request){

    }

    public function destroy($id){

    }
}
