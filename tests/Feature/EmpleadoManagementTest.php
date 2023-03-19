<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Empleado;

class EmpleadoManagementTest extends TestCase
{
    use RefreshDatabase;

     /** @test */
     public function a_empleado_can_be_created()
     {
         $this->withoutExceptionHandling();
 
         $response = $this->post('empleados', [
             'PrimerNombre' => 'primerNombre',
             'SegundoNombre' => 'segundoNombre',
             'TercerNombre' =>'tercerNombre',
             'PrimerApellido' => 'primerApellido',
             'SegundoApellido' => 'segundoApellido',
             'ApellidoMatrimonio' => 'apellidoMatrimonio',
             'Genero' => 'M',
             'FechaNacimiento' =>'1980-07-01'
         ]);
 
 
 
         $this-> assertCount(1, Empleado::all());
 
         $empleado= Empleado::first();
 
         $this->assertEquals($empleado->PrimerNombre, 'primerNombre');
         $this->assertEquals($empleado->SegundoNombre, 'segundoNombre');
         $this->assertEquals($empleado->TercerNombre, 'tercerNombre');
         $this->assertEquals($empleado->PrimerApellido, 'primerApellido');
         $this->assertEquals($empleado->SegundoApellido, 'segundoApellido');
         $this->assertEquals($empleado->ApellidoMatrimonio, 'apellidoMatrimonio');
         $this->assertEquals($empleado->Genero, 'M');
         $this->assertEquals($empleado->FechaNacimiento, '1980-07-01');
 
         $response->assertRedirect('/empleados/'. $empleado->id);
 
     }

      /** @test */
    public function a_empleados_can_be_retrieved()
    {
        $this->withoutExceptionHandling();


        $empleado = Empleado::factory()->create();

        $response = $this->get('/empleados/'. $empleado->id);

        $response->assertOk();

        $empleado = Empleado::first();

        $response->assertViewIs('empleados.show');
        $response->assertViewHas('empleado', $empleado);
    }

    /** @test */
    public function list_of_empleados_can_be_retrieved()
    {
        $this->withoutExceptionHandling();


        Empleado::factory(3)->create();

        $response = $this->get('/empleados');

        $response->assertOk();

        $empleados = Empleado::all();

        $response->assertViewIs('empleados.index');
        $response->assertViewHas('empleados', $empleados);
    }

     /** @test */
     public function a_empleado_can_be_updated()
     {
         $this->withoutExceptionHandling();
 
         $empleado = Empleado::factory()->create();
 
         $response = $this->put('/empleados/'. $empleado->id, [
             'PrimerNombre' => 'primerNombre',
             'SegundoNombre' => 'segundoNombre',
             'TercerNombre' =>'tercerNombre',
             'PrimerApellido' => 'primerApellido',
             'SegundoApellido' => 'segundoApellido',
             'ApellidoMatrimonio' => 'apellidoMatrimonio',
             'Genero' => 'M',
             'FechaNacimiento' =>'1980-07-01'
         ]);
 
 
 
         $this-> assertCount(1, Empleado::all());
 
         $empleado= $empleado->fresh();
 
         $this->assertEquals($empleado->PrimerNombre, 'primerNombre');
         $this->assertEquals($empleado->SegundoNombre, 'segundoNombre');
         $this->assertEquals($empleado->TercerNombre, 'tercerNombre');
         $this->assertEquals($empleado->PrimerApellido, 'primerApellido');
         $this->assertEquals($empleado->SegundoApellido, 'segundoApellido');
         $this->assertEquals($empleado->ApellidoMatrimonio, 'apellidoMatrimonio');
         $this->assertEquals($empleado->Genero, 'M');
         $this->assertEquals($empleado->FechaNacimiento, '1980-07-01');
 
         $response->assertRedirect('/empleados/'. $empleado->id);
 
     }
 
     /** @test */
     public function a_empleado_can_be_deleted()
     {
         $this->withoutExceptionHandling();
 
         $empleado = Empleado::factory()->create();
 
         $response = $this->delete('/empleados/'. $empleado->id);
 
         $this-> assertCount(0, Empleado::all());
 
         $response->assertRedirect('/empleados');
 
     }
 
 
     /** @test */
     public function a_primer_nombre_empleado_is_required()
     {
 
         $response = $this->post('empleados', [
             'PrimerNombre' => ''
         ]);
 
         $response->assertSessionHasErrors('PrimerNombre');
     }
 
     /** @test */
     public function a_primer_apellido_empleado_is_required()
     {
 
         $response = $this->post('empleados', [
             'PrimerApellido' => ''
         ]);
 
         $response->assertSessionHasErrors('PrimerApellido');
     }
 
     /** @test */
     public function opciones_genero_is_validated()
     {
 
         $response = $this->post('empleados', [
             'Genero' => 'X'
         ]);
 
         $response->assertSessionHasErrors('Genero');
     }
}
