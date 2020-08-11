<?php

namespace App\Http\Controllers\Admin;

use App\Models\Empresa;
use App\Models\VagaEmprego;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VagaController extends Controller
{


    public function listarVagas(Request $request)
    {
        $vagas = VagaEmprego::with(['regime', 'empresa'])->get();

        // return response()->json($vagas);
        return view('admin.listar_vagas', compact('vagas'));
    }

    public function cadastroForm(Request $request)
    {
        $empresas = Empresa::all();
        return view('admin.cadastrovaga', compact('empresas'));
    }


    // Salva nova vaga via formulario
    public function cadastroNovaVaga(Request $request)
    {

        $novaVaga = new  VagaEmprego();
        $slugname = \slugify($request->empresa);

        $empresa = Empresa::procurarPorNomeOuCriar($request->empresa);

        $novaVaga->titulo  = $request->titulo;
        $novaVaga->sub_titulo = $request->subtitulo;
        $novaVaga->descricao = $request->descricao;
        $novaVaga->regime_contratacao_id = $request->regime_contratacao_id;
        $novaVaga->remuneracao = $request->remuneracao;
        $novaVaga->aceita_remoto = $request->aceita_remoto;
        $novaVaga->ativa = $request->ativa;
        $novaVaga->requisitos = $request->requisitos;
        $novaVaga->contato = $request->contato;
        $novaVaga->regime_contratacao_id = $request->regime_contratacao_id;
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
        $id = $request->id;
        $vaga = VagaEmprego::find($id);

        if ($vaga) {
            $vaga->titulo = $request->titulo;
            $vaga->sub_titulo = $request->sub_titulo;
            $vaga->descricao = $request->descricao;
            $vaga->remuneracao = $request->remuneracao;
            $vaga->aceita_remoto = $request->aceita_remoto;
            $vaga->requisitos  = $request->requisitos;
            $vaga->contato = $request->contato;
            $vaga->status = $request->status;
            $vaga->ativa = $request->ativa;
            $vaga->regime_contratacao_id = $request->regime_contratacao_id;
            $vaga->empresa_id = $request->empresa_id;
        } else {
            flash('Vaga nao encontrada')->error();
            return redirect()->back();
        }

        $updated = $vaga->update();

        if ($updated) {
            flash('Vaga editada com sucesso')->success();
            return redirect()->back();
        } else {

            flash('Vaga nao editada, algum erro ocorreu.')->error();
            return redirect()->back();
        }
    }

    public function deletarVaga(Request $request)
    {

        $id = $request->id;
        $vaga = VagaEmprego::find($id);


        $deleted = $vaga->delete();
        if ($deleted) {
            flash('Vaga deletada com sucesso')->success();
            return redirect()->back();
        } else {
            flash('Vaga deletada com sucesso')->success();
            return redirect()->back();
        }
    }
}
