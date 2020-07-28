<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VagaEmprego;
use App\Models\Empresa;

class VagaController extends Controller
{
    // lista todas as vagas

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
        $novaVaga->remuneracao = 1200;
        $novaVaga->aceita_remoto = true;
        $novaVaga->ativa = true;
        $novaVaga->regime_contratacao_id = 2;


        if ($novaVaga->save()) {

            flash('Vaga de trabalho registrata com sucesso');
            return redirect()->back();
        } else {
            flash('Registro nao concluido , tente novamente.');
            return redirect()->back();
        }
    }

    // enviar todas as vagas para a requisicao
    public function listarVagas(Request $request)
    {

        $allVagas = VagaEmprego::all();

        return view('vagas', compact('allVagas'));
    }

    public function cadastroForm(Request $request)
    {
        $allVagas = VagaEmprego::all();

        $allEmpresas = Empresa::all();

        // dd($allVagas);
        // dd($allEmpresas);
        // die;
        return view('cadastro', compact('allEmpresas'));
    }
}
