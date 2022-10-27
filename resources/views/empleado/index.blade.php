@extends('layouts.app')

@section('content')
<div class="container">



@if(Session::has('mensaje'))

{{ Session::get('mensaje') }}
@endif



<a href="{{ url('empleado/create') }}">Registrar Nuevo Empleado</a>

<table class="border-collapse border border-slate-500">

    <thead>
        <tr>
            <th class="border border-slate-600" >id</th>
            <th class="border border-slate-600">Nombre</th>
            <th class="border border-slate-600">Apellido</th>
            <th class="border border-slate-600">Correo</th>
            <th class="border border-slate-600">Foto</th>
            <th class="border border-slate-600">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td class="border border-slate-600" scope="row">{{$empleado->id}}</td>
            <td class="border border-slate-600">{{$empleado->Nombre}}</td>
            <td class="border border-slate-600">{{$empleado->Apellido}}</td>
            <td class="border border-slate-600">{{$empleado->Correo}}</td>

            <td class="border border-slate-600">
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
            </td>
            <td class="border border-slate-600">
                <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}">Editar</a>
                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Deseas borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

@endsection