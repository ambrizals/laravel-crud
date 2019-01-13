<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jasa;

class listController extends Controller
{
    public function index(){
        $jasa = jasa::latest()->paginate(5);
        return view('jasa.index', compact('jasa'));
    }

    public function show($id){
    	$jasa = jasa::where('urlslug',$id)->first();
    	return view('jasa.show', compact('jasa'));
    }
}
