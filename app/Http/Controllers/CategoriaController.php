<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class CategoriaController extends Controller
{
    public function index(){
        return view('layouts.admin');
    }

    public function guardar(Request $request){
        Categoria::create($request->all());
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getCategoria = Categoria::all();
        return view('informacion', compact('getCategoria'));
    }

    public function editar($id){
        //dd($id);
        $editCategoria = Categoria::where('id', $id)->firstOrfail();
        //dd($editCategoria);
        return view('editarCategoria', compact('editCategoria'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = Categoria::findOrFail($id);
        $requestCategoria = $request->all();
        $actualizarD->update($requestCategoria);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarCategoria = Categoria::findOrFail($id);
        $eliminarCategoria->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}
