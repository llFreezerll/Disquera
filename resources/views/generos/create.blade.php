@extends('layouts.app')
@section('content')

<div class="container">

<h1> Registro de generos</h1>

<div class="card" style="width: 18rem;">

<div class= "card-body">

  <form action="{{url('/generos')}}" method="POST" enctype="multipart/form-data">
  @include('generos.form');
  @csrf
</form>

</div>
</div>
</div>


@endsection