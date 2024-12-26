@extends('layouts.admin')

@section('content')
    <div class="container">
        <hr class="featurette-divider">
        <h2 class="text-center">Actualizar Mision y Vision</h2>
    
        <form class="row g-3 needs-validation" novalidate>
  
            <div class="col-md-12 position-relative">
              <label for="mision" class="form-label">Mision</label>
              <textarea class="form-control" id="mision" name="mision" ></textarea>
            </div>
            <div class="col-md-12 position-relative">
                <label for="imgMision" class="form-label">Mision Imagen</label>
                <input type="file" class="form-control" id="imgMision" name="imgMision" required>
              </div>
            
            <div class="col-md-12 position-relative">
                <label for="vision" class="form-label">Vision</label>
                <textarea class="form-control" id="vision" name="vision" ></textarea>
              </div>

              <div class="col-md-12 position-relative">
                <label for="imgVision" class="form-label">Vision Imagen</label>
                <input type="file" class="form-control" id="imgVision" name="imgVision" required>
              </div>
      
    
      
    
         
    
            <div class="col-12">
              <button class="btn btn-outline-success" type="submit">Actualizar</button>
            </div>
          </form>
    </div>
@endsection