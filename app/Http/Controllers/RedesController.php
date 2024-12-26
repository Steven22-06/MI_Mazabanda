<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class RedesController extends Controller
{
    public function index(){
        //$getRedes = Redes::all();
        //dd($getRedes);
        return view('layouts.admin');//, compact('getRedes'));
        //return view('Redes');
    }

    public function guardar(Request $request){
        //$getRedes = Redes::all();
        //dd($request);
        Redes::create($request->all());
        //return view('Redes');
        //return view('Redes', compact('getRedes'));
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getRedes = Redes::all();
        return view('informacion', compact('getRedes'));
    }

    public function editar($id){
        //dd($id);
        $editRedes = Redes::where('id', $id)->firstOrfail();
        //dd($editRedes);
        return view('editarRedes', compact('editRedes'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = Redes::findOrFail($id);
        $requestRedes = $request->all();
        $actualizarD->update($requestRedes);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarRedes = Redes::findOrFail($id);
        $eliminarRedes->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}
