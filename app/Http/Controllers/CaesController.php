<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Caes;
use App\Http\Requests\CaesRequest;

class CaesController extends Controller
{
    public function index()
    {

        $caes = DB::select('SELECT * FROM caes');

        return view('pages.index')->with('caes', $caes);
    }
    public function inicio()
    {
     return view('pages.inicio');   
    }

    public function create()
    {
       return view('pages.cadastro');
    }

    public function store(CaesRequest $request) {
        $params = $request->all();
        Caes::create($params);   
        return redirect()->action('CaesController@index')->withInput(Request::only('nome'));
    }

    public function destroy($id)
    {

        $caes= Caes::find($id);
        $caes->delete();
        
        return redirect()->action('CaesController@index')->with('success', 'Removido');
    }

}
