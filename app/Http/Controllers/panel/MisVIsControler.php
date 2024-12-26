<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\MisVIs;
use Illuminate\Http\Request;

class MisVIsControler extends Controller
{
    public function index(){
        return view('admin.MisVis.index');
    }

    public function edit(){
        return view('admin.MisVis.editMV');
    }

    public function create(){
        return view('admin.MisVis.create2');
    }

    public function store(Request $request){
        MisVis::create($request->all());
        return redirect()->to ('/MisVis');
    }
}
