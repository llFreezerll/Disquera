@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Listado de Disqueras</h1>

    @if(Session::has('msj'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    {{@Session::get('msj')}}
  </div>
  </div>
  @endif

  <a class="btn btn-primary"  href="{{ url('/disqueras/create') }}" role="button">CREAR</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Foto</th>
      <th scope="col">Nit Disquera</th>
      <th scope="col">Nombre Disquera</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion Disquera</th>
      <th scope="col">Estado Disquera</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($disqueras as $c)
    <tr>
      <th scope="row">{{ $c->id_Disquera}}</th>
      <td><img src="{{ asset('storage').'/'.$c->fotos }}" width=80 ></td>
      <td>{{ $c->nit_Disquera}}</td>
      <td>{{ $c->nombre_Disquera}}</td>
      <td>{{ $c->telefono}}</td>
      <td>{{ $c->direccion_Disquera}}</td>
      <td>{{ $c->Estado_Disquera}}</td>
      
      <td><a role="button" class="btn btn-warning" href="{{ url('/disqueras/'.$c->id_Disquera.'/edit') }}">Editar</button></td>
      <td>
      <form action="{{url('/disqueras/'.$c->id_Disquera)}}" method="POST">
        @csrf 
        {{method_field('DELETE')}}
        <input type="submit" class="btn btn-danger" value="Eliminar"
         onclick="return confirm('esta seguro de eliminar este registro')">
      </form> 
      </td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection