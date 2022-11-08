<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   public function test_contacto()
    {
        $response = $this->get('/Contacto');
        $response->assertStatus(200);
    }
    public function test_landingpage()
    {
        $response = $this->get('/landingpage');
        $response->assertStatus(200);
    }
     /** @test */
    public function test_contacto_con_codigo()
    {
        $response = $this->get('/Contacto');
        $response->assertStatus(200);
        $response->assertSeeText(['Nombre','Mail','Comentario']);
    }
      /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/recibe-form-Contacto', [
            'nombre'=> '',
            'Mail'=> '',
            'Comentario'=> '',
        ]);
        
        $response->assertSessionHasErrors([
            'nombre',
            'Mail',
            'Comentario',
        ]);

    }
    /** @test */
    public function prellenado_formulario_contacto(Type $var = null)
    {
        $response = $this->get('/Contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('cristian', $response['nombre']);
        $this->assertEquals('@udg.mx', $response['email']);
       
    }
}
