<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class MisVisController extends Controller
{
    public function index(){
        //$getMisVis = MisVis::all();
        //dd($getMisVis);
        return view('layouts.admin');//, compact('getMisVis'));
        //return view('MisVis');
    }

    public function guardar(Request $request){
        //$getMisVis = MisVis::all();
        //dd($request);
        MisVis::create($request->all());
        //return view('MisVis');
        //return view('MisVis', compact('getMisVis'));
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getMisVis = MisVis::all();
        return view('informacion', compact('getMisVis'));
    }

    public function editar($id){
        //dd($id);
        $editMisVis = MisVis::where('id', $id)->firstOrfail();
        //dd($editMisVis);
        return view('editarMisVis', compact('editMisVis'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = MisVis::findOrFail($id);
        $requestMisVis = $request->all();
        $actualizarD->update($requestMisVis);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarMisVis = MisVis::findOrFail($id);
        $eliminarMisVis->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}
