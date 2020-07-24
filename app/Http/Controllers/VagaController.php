<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GCVagaEmprego;

class VagaController extends Controller
{
    // lista todas as vagas

    // Salva nova vaga via formulario
    public function cadastroNovaVaga(Request $request)
    {
        $novaVaga = new  GCVagaEmprego();
        $novaVaga->empresa = $request->empresa;
        $novaVaga->titulo  = $request->titulo;
        $novaVaga->sub_titulo = $request->subtitulo;
        $novaVaga->local = $request->local;
        $novaVaga->descricao = $request->descricao;
        $novaVaga->observacoes = $request->observacoes;
        $novaVaga->regime_contratacao_id = $request->regime_contratacao_id;
        $novaVaga->remuneracao = 1200;

        // dd($novaVaga);

        if ($novaVaga->save()) {

            $msg = 'Vaga cadastrada!';

            // Flash
            // return view compact msg
            return 'success';
        } else {
            return 'false';
        }
    }

    // enviar todas as vagas para a requisicao
    public function listarVagas(Request $request)
    {

        $allVagas = GCVagaEmprego::all();

        dd($allVagas);

        return view('vagas', compact('allVagas'));
    }
}
