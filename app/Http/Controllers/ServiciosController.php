<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class ServiciosController extends Controller
{
    public function index(){
        //$getServicios = Servicios::all();
        //dd($getServicios);
        return view('layouts.admin');//, compact('getServicios'));
        //return view('Servicios');
    }

    public function guardar(Request $request){
        //$getServicios = Servicios::all();
        //dd($request);
        Servicios::create($request->all());
        //return view('Servicios');
        //return view('Servicios', compact('getServicios'));
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getServicios = Servicios::all();
        return view('informacion', compact('getServicios'));
    }

    public function editar($id){
        //dd($id);
        $editServicios = Servicios::where('id', $id)->firstOrfail();
        //dd($editServicios);
        return view('editarServicios', compact('editServicios'));
    }

    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualizarD = Servicios::findOrFail($id);
        $requestServicios = $request->all();
        $actualizarD->update($requestServicios);
        return redirect()->to('/informacion');
    }

    public function eliminar($id){
        //dd($id);
        $eliminarServicios = Servicios::findOrFail($id);
        $eliminarServicios->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view('admin.administracion');
    }
    
    public function adminInven(){
        return view('admin.adminInvetario');
    }
}
