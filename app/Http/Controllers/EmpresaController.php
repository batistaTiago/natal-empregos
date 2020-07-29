<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function cadastrarEmpresaForm()
    {
        return view('cadastro');
    }

    public function cadastrarEmpresaCallback(Request $request)
    {
        $novaEmpresa = new Empresa();

        $novaEmpresa->nome = $request->nome;
        $novaEmpresa->nome_fantasia = $request->nome_fantasia;
        $novaEmpresa->cnpj = $request->cnpj;

        if ($novaEmpresa->save) {
            // return with message
            return 'sucess';
        } else {
            return 'false';
        }
    }
}
