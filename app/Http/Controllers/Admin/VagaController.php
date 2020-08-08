<?php

namespace App\Http\Controllers\Admin;

use App\Models\VagaEmprego;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VagaController extends Controller
{
    public function listarVagas(Request $request)
    {
        $vagas = VagaEmprego::with(['regime', 'empresa'])->get();
        dd($vaga);
        // return response()->json($vagas);
        return view('admin.listar_vagas', compact('vagas'));
    }

    public function cadastroForm(Request $request)
    {
        $empresas = Empresa::all();
        return view('cadastrovaga', compact('empresas'));
    }


    // Salva nova vaga via formulario
    public function cadastroNovaVaga(Request $request)
    {

        $novaVaga = new  VagaEmprego();
        $slugname = \slugify($request->empresa);

        $empresa = Empresa::procurarPorNomeOuCriar($request->empresa);

        $novaVaga->titulo  = $request->titulo;
        $novaVaga->sub_titulo = $request->subtitulo;
        // $novaVaga->local = $request->local;
        $novaVaga->descricao = $request->descricao;
        $novaVaga->regime_contratacao_id = $request->regime_contratacao_id;
        $novaVaga->remuneracao = $request->remuneracao;
        $novaVaga->aceita_remoto = $request->aceita_remoto;
        $novaVaga->ativa = $request->ativa;
        $novaVaga->requisitos = $request->requisitos;
        $novaVaga->contato = $request->contato;
        $novaVaga->regime_contratacao_id = 2;
        $novaVaga->empresa_id = $empresa->id;

        if ($novaVaga->save()) {

            flash('Vaga de trabalho registrata com sucesso')->success();
            return redirect()->back();
        } else {
            flash('Registro nao concluido , tente novamente.')->error();
            return redirect()->back();
        }
    }


    public function editarVagaEmprego(Request $request)
    {
        $vaga = VagaEmprego::find($request->id);
        $params = Request::all();
        dd($params);
        if ($vaga) {
            return 'vaga existente';
        } else {
            return 'vaga nao existente';
        }
    }
}
