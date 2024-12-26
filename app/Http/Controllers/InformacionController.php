<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class InformacionController extends Controller
{
    public function index(){
        //$getInformacion = Informacion::all();
        //dd($getInformacion);
        return view('layouts.admin');//, compact('getInformacion'));
        //return view('Informacion');
    }

    public function guardar(Request $request){
        //$getInformacion = Informacion::all();
        //dd($request);
        Informacion::create($request->all());
        //return view('Informacion');
        //return view('Informacion', compact('getInformacion'));
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getInformacion = Informacion::all();
        return view('informacion', compact('getInformacion'));
    }

    public function editar($id){
        //dd($id);
        $editInformacion = Informacion::where('id', $id)->firstOrfail();
        //dd($editInformacion);
        return view('editarInformacion', compact('editInformacion'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = Informacion::findOrFail($id);
        $requestInformacion = $request->all();
        $actualizarD->update($requestInformacion);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarInformacion = Informacion::findOrFail($id);
        $eliminarInformacion->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}
