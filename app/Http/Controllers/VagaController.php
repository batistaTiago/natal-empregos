<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\VagaEmprego;
use App\Models\Empresa;
use App\Models\Contato;

class VagaController extends Controller
{
    // lista todas as vagas

    // Salva nova vaga via formulario


    // enviar todas as vagas para a requisicao
    public function listarVagas(Request $request)
    {
        $vagas = VagaEmprego::with('regime')->where('ativa', true)->paginate(12);
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

    public function vagaDetalhes(Request $request)
    {
        $id = $request->id;
        $vaga = VagaEmprego::with('regime', 'beneficios', 'empresa')->find($id);
        return view('detalhesvaga', compact('vaga'));
    }
}
