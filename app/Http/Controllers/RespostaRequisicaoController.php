<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespostaRequisicaoController extends Controller
{
    public function retornaTexto(Request $request)
    {
        $texto = $request->input('texto');
        return response()->json(['texto' => $texto]);
    }
}
