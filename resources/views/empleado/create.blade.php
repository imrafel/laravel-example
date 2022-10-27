@extends('layouts.app')

@section('content')
<div class="container">



<h3>Formulario de creacion de empleados</h3>

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('empleado.form', ['modo'=>'Agregar']);

</form>
</div>
@endsection