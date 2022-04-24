<div class="mb-3">
  <label for="nit_Disquera" class="form-label">nit disquera</label>
  <input type="text" class="form-control" value="{{isset($disqueras->nit_Disquera)?$disqueras->nit_Disquera:''}}"id="nit_Disquera"name="nit_Disquera" placeholder="Ingrese numero de nit">
  </div>

  <div class="mb-3">
  <label for="nombre_Disquera" class="form-label">Nombre disquera</label>
  <input type="text" class="form-control" value="{{isset($disqueras->nombre_Disquera)?$disqueras->nombre_Disquera:''}}"id="nombre_Disquera"name="nombre_Disquera" placeholder="Ingrese nombre de disquera">
  </div>

  <div class="mb-3">
  <label for="telefono" class="form-label">telefono</label>
  <input type="text" class="form-control"value="{{isset($disqueras->telefono)?$disqueras->telefono:''}}"id="telefono"name="telefono" placeholder="Ingrese su telefono">
  </div>

  <div class="mb-3">
  <label for="direccion_Disquera" class="form-label">direccion disquera</label>
  <input type="text" class="form-control"value="{{isset($disqueras->direccion_Disquera)?$disqueras->direccion_Disquera:''}}"id="direccion_Disquera"name="direccion_Disquera" placeholder="Ingrese direccion disquera">
  </div>

  <div class="mb-3">
  <label for="Estado_Disquera" class="form-label">estado disquera</label>
  <input type="text" class="form-control"value="{{isset($disqueras->Estado_Disquera)?$disqueras->Estado_Disquera:''}}"id="Estado_Disquera"name="Estado_Disquera" placeholder="estado disquera">
  </div>


  <div class="mb-3">
  <label for="fotos" class="form-label">Foto</label>
  <input type="file" name="fotos"id="fotos" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>