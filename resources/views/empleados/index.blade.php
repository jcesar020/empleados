@extends('layouts.app')

@section('content')
    <div class="container">




        <div class="row justify-content-center">



            <h2>Listado de empleados</h2>
            <div class="col-2">
                <a class="btn btn-primary" href="{{ route('empleados.create') }}">
                    Agregar un empleado
                </a>
            </div>


            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Apellido Matrimonio</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $empleado->PrimerNombre }} {{ $empleado->SegundoNombre }} {{ $empleado->TercerNombre }}
                            </td>
                            <td>{{ $empleado->PrimerApellido }} {{ $empleado->SegundoApellido }} </td>
                            <td>{{ $empleado->ApellidoMatrimonio }}</td>
                            <td>{{ $generos[$empleado->Genero] }}</td>
                            <td>{{ $empleado->FechaNacimiento }}</td>
                            <td><a href="{{ route('empleados.show', ['empleado' => $empleado->id]) }}">Ver</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
