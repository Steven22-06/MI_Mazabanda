<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class ImagenesController extends Controller
{
    public function index(){
        //$getImagenes = Imagenes::all();
        //dd($getImagenes);
        return view('layouts.admin');//, compact('getImagenes'));
        //return view('Imagenes');
    }

    public function guardar(Request $request){
        //$getImagenes = Imagenes::all();
        //dd($request);
        Imagenes::create($request->all());
        //return view('Imagenes');
        //return view('Imagenes', compact('getImagenes'));
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getImagenes = Imagenes::all();
        return view('informacion', compact('getImagenes'));
    }

    public function editar($id){
        //dd($id);
        $editImagenes = Imagenes::where('id', $id)->firstOrfail();
        //dd($editImagenes);
        return view('editarImagenes', compact('editImagenes'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = Imagenes::findOrFail($id);
        $requestImagenes = $request->all();
        $actualizarD->update($requestImagenes);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarImagenes = Imagenes::findOrFail($id);
        $eliminarImagenes->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}
