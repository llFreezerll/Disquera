@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Lista de Generos</h1>

    @if(Session::has('msj'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    {{@Session::get('msj')}}
  </div>
  </div>
  @endif

  <a class="btn btn-primary"  href="{{ url('/generos/create') }}" role="button">CREAR</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre genero</th>
      <th scope="col">Estado genero</th>
      <th scope="col" colspan="2">Acciones</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($generos as $c)
    <tr>
      <th scope="row">{{ $c->id_Genero}}</th>
      <td><img src="{{ asset('storage').'/'.$c->foto }}" width=80 ></td>
      
      <td>{{ $c->nombre_Genero}}</td>
      <td>{{ $c->Estado_Genero}}</td>
      
      
      <td><a role="button" class="btn btn-warning" href="{{ url('/generos/'.$c->id_Genero.'/edit') }}">Editar</button></td>
      <td>
      <form action="{{url('/generos/'.$c->id_Genero)}}" method="POST">
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
  