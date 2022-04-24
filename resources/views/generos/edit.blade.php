@extends('layouts.app')
@section('content')

<div class="container">

<h1> Edicion de generos</h1>

<div class="card" style="width: 18rem;">

<div class= "card-body">

  <form action="{{url('/generos/'.$generos->id_Genero)}}" method="POST" enctype="multipart/form-data">
  @csrf
  {{method_field('PATCH')}}
  @include('generos.form');
</form>

</div>
</div>
</div>


@endsection