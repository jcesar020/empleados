@extends('layouts.app')

@section('content')
    <div class="container">




        <div class="row">

            <h2>Editarndo Empleado</h2>

            <div class="col-md-6">


                <div class="card-body">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post"
                        action="{{ route('empleados.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="primer_nombre">Primer Nombre</label>
                            <input type="text" id="primer_nombre" name="PrimerNombre" class="form-control"
                                value="{{ $empleado->PrimerNombre }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="segundo_nombre">Segundo Nombre</label>
                            <input type="text" id="segundo_nombre" name="SegundoNombre" class="form-control"
                                value="{{ $empleado->SegundoNombre }}">
                        </div>
                        <div class="form-group">
                            <label for="tercer_nombre">Tercer Nombre</label>
                            <input type="text" id="tercer_nombre" name="TercerNombre"
                                class="form-control"value="{{ $empleado->TercerNombre }}">
                        </div>
                        <div class="form-group">
                            <label for="primer_apellido">Primer Apellido</label>
                            <input type="text" id="primer_apellido" name="PrimerApellido" class="form-control"
                                value="{{ $empleado->PrimerApellido }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="segundo_apellido">Segundo Apellido</label>
                            <input type="text" id="segundo_apellido" name="SegundoApellido" class="form-control"
                                value="{{ $empleado->SegundoApellido }}">
                        </div>
                        <div class="form-group">
                            <label for="apellido_matrimonio">Apellido de Matrimonio</label>
                            <input type="text" id="apellido_matrimonio" name="ApellidoMatrimonio" class="form-control"
                                value="{{ $empleado->ApellidoMatrimonio }}">
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <select name="Genero" id="genero" class="form-control" value="{{ $empleado->Genero }}">
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                                <option value="O">Otros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" id="fecha_nacimiento" name="FechaNacimiento" class="form-control"
                                value="{{ $empleado->FechaNacimiento }}" required="">
                        </div>
                        {{-- <option value="F" {{ $data->like_to == 'giveaway' ? 'selected' : '' }}>Femenino</option> --}}

                        <button type="submit" class="btn btn-primary mt-4">Guardar</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
