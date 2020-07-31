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

            flash('Vaga de trabalho registrata com sucesso')->success();
            return redirect()->back();
        } else {
            flash('Registro nao concluido , tente novamente.')->error();
            return redirect()->back();
        }
    }

    // enviar todas as vagas para a requisicao
    public function listarVagas(Request $request)
    {
        $vagas = VagaEmprego::with('regime')->paginate(12);
        return view('home', compact('vagas'));
    }

    public function cadastroForm(Request $request)
    {
        $empresas = Empresa::all();
        return view('cadastrovaga', compact('empresas'));
    }

    public function landing(Request $request)
    {
        return redirect(route('cliente.vagas.listar'));
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

    public function vagaDetalhes(Request $request)
    {
        $id = $request->id;
        $vaga = VagaEmprego::find($id);
        return view('detalhesvaga', compact('vaga'));
    }
}
