<h3>{{$modo}} empleado</h3>


@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<label for="Nombre">Ingresar su nombre</label>
    <input type="text" name="Nombre" id="Nombre" 
    value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}"
    >
    <br>
    <label for="Apellido">Ingresar su apellido</label>
    <input type="text" name="Apellido" id="Apellido" 
    value="{{isset($empleado->Apellido)?$empleado->Apellido:old('Apellido')}}" 
    >
    <br>
    <label for="Correo">Ingresar su Correo electronico</label>
    <input type="text" name="Correo" id="Correo" 
    value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" 
    >
    <br>
    <label for="Foto">Agregar una Fotografia</label>
    <br>
    @if(isset($empleado->Foto))
    <img src="{{ asset('storage') .'/'. $empleado->Foto }}" width="100" alt="">
    @endif
    <input type="file" name="Foto" id="Foto" value="">
    <br>
    <input type="submit" value="{{$modo}} datos">

    <a href="{{ url('empleado/') }}">Regresar</a>