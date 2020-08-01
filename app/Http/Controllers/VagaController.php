<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VagaEmprego;
use App\Models\Empresa;

class VagaController extends Controller
{
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
        $vaga = VagaEmprego::find($request->id);

        if (!isset($vaga)) {
            dd("implementar view de not found");
        }
        
        return view('detalhesvaga', compact('vaga'));
    }
}
