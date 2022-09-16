<?php

namespace Tests\Unit;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class RetornaDataHoraAtualTest extends TestCase
{
    /**
     * @test
     */
    public function data_e_hora_atual_retornada_com_sucesso()
    {
        $dataHoraAtual = now();
        $resposta = $this->getJson(route('exibirDataHoraAtual'));

        $resposta->assertOk();

        $resposta->assertJson(
            fn (AssertableJson $json) =>
            $json->where('dataHoraAtual', $dataHoraAtual->toIso8601String())
        );
    }
}
