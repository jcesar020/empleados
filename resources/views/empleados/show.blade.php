@extends('layouts.app')

<style>
    .label2 {
        font-size: 1.3rem;
        font-weight: bolder;
    }

    .detalle {
        font-size: 1.1rem;
        font-weight: bold;
    }
</style>
@section('content')
    <div class="container">




        <div class="row justify-content-center">

            <h2>Detalle de empleado</h2>


            <div class="col-md-6">


                <div class="card-body">

                    <table class="table">
                        <tbody>


                            <tr>
                                <td class="label2">Primer Nombre</td>
                                <td class="detalle">{{ $empleado->PrimerNombre }}</td>
                            </tr>
                            <tr>
                                <td class="label2">Segundo Nombre</td>
                                <td class="detalle">{{ $empleado->SegundoNombre }}</td>
                            </tr>
                            <tr>
                                <td class="label2">Tercer Nombre</td>
                                <td class="detalle">{{ $empleado->TecerNombre }}</td>
                            </tr>
                            <tr>
                                <td class="label2">Primer Apellido</td>
                                <td class="detalle">{{ $empleado->PrimerApellido }}</td>
                            </tr>
                            <tr>
                                <td class="label2">Segundo Apellido</td>
                                <td class="detalle">{{ $empleado->SegundoApellido }}</td>
                            </tr>
                            <tr>
                                <td class="label2">Apellido Matrimonio</td>
                                <td class="detalle">{{ $empleado->ApellidoMatrimonio }}</td>
                            </tr>
                            <tr>
                                <td class="label2">Genero</td>
                                <td class="detalle">{{ $generos[$empleado->Genero] }}

                                </td>
                            </tr>
                            <tr>
                                <td class="label2">Fecha de Nacimieneto</td>
                                <td class="detalle">{{ $empleado->FechaNacimiento }}</td>
                            </tr>
                        </tbody>
                    </table>



                </div>
                <div class="d-flex">
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="{{ route('empleados.edit', $empleado->id) }}">
                            Editar
                        </a>
                    </div>
                    <div class="col-md-2">
                        <form method="post" action="{{ route('empleados.destroy', $empleado->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger ">Eliminar</button>
                        </form>
                    </div>



                    {{-- <a class="btn btn-danger ml-4" href="{{ route('empleados.destroy', $empleado->id) }}">
                        Eliminar
                    </a> --}}
                </div>


            </div>


        </div>
    </div>
@endsection
