<div class="mb-3">
  <label for="nombre_Genero" class="form-label">nombre genero</label>
  <input type="text" class="form-control" value="{{isset($generos->nombre_Genero)?$generos->nombre_Genero:''}}"id="nombre_Genero"name="nombre_Genero" placeholder="Ingrese nombre de genero">
  </div>

  <div class="mb-3">
  <label for="Estado_Genero" class="form-label">Estado genero</label>
  <input type="text" class="form-control" value="{{isset($generos->Estado_Genero)?$generos->Estado_Genero:''}}"id="Estado_Genero"name="Estado_Genero" placeholder="estado genero">
  </div>

  

  <div class="mb-3">
  <label for="foto" class="form-label">Foto</label>
  <input type="file" name="foto"id="foto" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>