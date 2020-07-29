<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function cadastrarEmpresaForm()
    {
        return view('cadastroempresa');
    }

    public function cadastrarEmpresaCallback(Request $request)
    {

        return 'sucesso';

        $novaEmpresa = new Empresa();

        $novaEmpresa->nome = $request->nome;
        $novaEmpresa->nome_fantasia = $request->nome_fantasia;
        $novaEmpresa->cnpj = $request->cnpj;

        $success = $novaEmpresa->save();

        if ($success) {
            if ($request->header('accept') == 'application/json') {
                /* retorna json */
    
                return 'json';
            } else {
                /* retorna view */
             
                return 'view';
            }
        } else {
            if ($request->header('accept') == 'application/json') {
                /* retorna json */
    
                return 'json de erro';
            } else {
                /* retorna view de erro (callback de erro do form de submit empresa)*/
             
                return 'view de erro';
            }
        }
    }
}
