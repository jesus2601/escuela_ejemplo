<!-- Extiende del archivo app, donde cargamos bootstrap y el navbar-->
<!-- Este archivo se debe especificar en las rutas en web.php -->
@extends('app')
<!-- Se coloca donde agregamos @yield('Content') -->
@section('Content')
<div class="row">
    <!-- En este div esta el formulario-->
    <div class='col-6'>
        <!-- Es importante agregar action y method, action apunta al nombre de la ruta que definimos en routes para este formulario y el method es POST -->
        <form  action=" {{route('tareas')}} " method="POST" >
            <!-- Es importante agregar @csrf porque es una convención de laravel por seguridad de los datos etc,etc -->
            @csrf
            @if (session('success'))
            <!-- Si el controlador puede guardar la tarea envian un mensaje que viene con un encabezado success -->
                <div class="alert alert-success" role="alert">
                    ¡Echo! {{session('success')}}
                </div>
            @endif
            <!-- El error a mi parecer es un error en algun campo, por eso puse dos, uno para el titulo y otro para la descripcion, estos nombres deben corresponder al name -->
            @error('titulo')
                <div class="alert alert-danger" role="alert">
                    ¡Ups! {{$message}}
                </div>
            @enderror
            @error('descripcion')
                <div class="alert alert-danger" role="alert">
                    ¡Ups! {{$message}}
                </div>
            @enderror
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo de la tarea</label>
                <!-- El atributo name debe contener el nombre del campo al que corresponde en la BD-->
                <input type="text" class="form-control" id="titulo" aria-describedby="titulo" name='titulo'>
                <div id="titulo" class="form-text">Un titulo adecuado para una tarea</div>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción de la tarea</label>
                <textarea class="form-control" rows='3' id="descripcion" name='descripcion'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Tarea</button>
        </form>
    </div>

    <!-- En este div esta una tabla con las tareas creadas -->
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tareas as $tarea)
                    <tr>
                        <th scope="row"> {{ $tarea->id }} </th>
                        <th> {{ $tarea->titulo }} </th>
                        <th> {{ $tarea->descripcion }} </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection