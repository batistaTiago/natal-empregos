<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function listarEmpresas(Request $request)
    {
        $empresas = Empresa::all();
        // return response()->json($vagas);
        return view('admin.listar_empresas', compact('empresas'));
    }

    public function cadastrarEmpresaForm()
    {
        return view('cadastroempresa');
    }

    public function cadastrarEmpresaCallback(Request $request)
    {

        // dd($request->all());

        $novaEmpresa = new Empresa();

        $novaEmpresa->nome = $request->nome;
        $novaEmpresa->nome_fantasia = $request->nome_fantasia;
        $novaEmpresa->cnpj = $request->cnpj;
        $novaEmpresa->slug = \slugify($request->nome_fantasia);

        $success = $novaEmpresa->save();

        if ($success) {
            if ($request->header('accept') == 'application/json') {
                /* retorna json */

                return 'json';
            } else {
                /* retorna view */
                flash("Empresa $request->nome cadastrada com sucesso!")->success();
                return redirect()->back();
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
