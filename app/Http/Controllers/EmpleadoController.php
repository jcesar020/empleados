<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();

        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'PrimerNombre'=> 'required',
            'SegundoNombre'=> '',
            'TercerNombre'=> '',
            'PrimerApellido'=> 'required',
            'SegundoApellido'=> '',
            'ApellidoMatrimonio'=> '',
            'Genero'=> [
                'required',
                Rule::in(['F', 'M','O']),
            ],
            'FechaNacimiento'=> 'required'
        ]);

      $empleado =  Empleado::create($data);

      return redirect('/empleados/' . $empleado->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $data = request()->validate([
            'PrimerNombre'=> 'required',
            'SegundoNombre'=> '',
            'TercerNombre'=> '',
            'PrimerApellido'=> 'required',
            'SegundoApellido'=> '',
            'ApellidoMatrimonio'=> '',
            'Genero'=> [
                'required',
                Rule::in(['F', 'M','O']),
            ],
            'FechaNacimiento'=> 'required'
        ]);
        $empleado->update($data);
        return redirect('/empleados/' . $empleado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect('/empleados/');
    }
}
