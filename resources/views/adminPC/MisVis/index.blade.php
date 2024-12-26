@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Listado de Mision y Vision</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
      
              <a class="btn btn-outline-success" href="/createMisVis">Ingresar</a>
              <a class="btn btn-outline-danger" href="/redesd">Desactivados</a>
        </div>
      </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Imagen</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mejorar los espacios públicos a través del diseño, construcción y remodelación de estructuras y mobiliarios personalizados, incorporando técnicas de pintura decorativa. Nuestro objetivo es embellecer el entorno y contribuir al bienestar de las comunidades.</td>
              <td>Ser una empresa líder en la transformación de espacios públicos, creando entornos vibrantes, inclusivos y sostenibles que reflejen la identidad y valores de las comunidades. Cada proyecto será una oportunidad para fortalecer el sentido de pertenencia y fomentar la participación activa de la sociedad.</td>
              <td><a class="btn btn-outline-success" href="/EditMisVis">Actualizar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
@endsection