<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class retornaTextoTextoTest extends TestCase
{
    use WithFaker;
    /**
     * @test
     */
    public function retorna_o_texto_enviado_na_requisicao_com_sucesso()
    {
        $texto = $this->faker()->text();

        $resposta = $this->post(route('retornaTexto'), [
            'texto' => $texto
        ]);

        $resposta->assertOk();

        $resposta->assertJson(
            fn (AssertableJson $json) =>
            $json->where('texto', $texto)
        );
    }
}
