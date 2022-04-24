@extends('layouts.app')
@section('content')

<div class="container">

<h1> Edicion de disquera</h1>

<div class="card" style="width: 18rem;">

<div class= "card-body">

  <form action="{{url('/disqueras/'.$disqueras->id_Disquera)}}" method="POST" enctype="multipart/form-data">
  @csrf
  {{method_field('PATCH')}}
  @include('disqueras.form');
</form>

</div>
</div>
</div>


@endsection