@extends('layouts.app')
@section('content')

<div class="container">

<h1> Registro de disqueras</h1>

<div class="card" style="width: 18rem;">

<div class= "card-body">

  <form action="{{url('/disqueras')}}" method="POST" enctype="multipart/form-data">
  @include('disqueras.form');
  @csrf
</form>

</div>
</div>
</div>


@endsection