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

    public function procurarVaga(Request $request){
        
        $searchString = $request['searchinput'];
   

        $allVagas = VagaEmprego::join('empresa' , 'empresa.id' , 'vaga_emprego.empresa_id' )
                                ->where('vaga_emprego.titulo', 'like' , '%' . $searchString . '%')
                                ->orWhere('vaga_emprego.descricao' , 'like' , '%' . $searchString . '%')
                                ->orWhere('empresa.nome' , 'like' , '%' . $searchString . '%')
                                ->orWhere('empresa.nome_fantasia' , 'like' , '%' . $searchString . '%')
                                ->paginate(24);
        


        $vagas = $allVagas;
        return view('home' , compact('vagas'));
    }
}
