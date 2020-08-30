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

        $vagasEmpresa = [];
        $empresasByString = Empresa::where('nome' , 'like' , '%' . $searchString . '%')
                                    ->orWhere('nome_fantasia' , 'like' , '%' . $searchString . '%')
                                    ->get();
        // dd($empresasByString);
        $empresasId = [];
        if($empresasByString){
            foreach($empresasByString as $empresa){
                $empresasId[] = $empresa->id;
                // $vagasEmpresa[] = VagaEmprego::where('empresa_id' , $empresa->id)->get();
            }
        }

        $vagasEmpresa = VagaEmprego::whereIn('empresa_id' , $empresasId)->get();
        // $vagasEmpresa = $vagasEmpresa[0];
        

        $vagasEmprego = VagaEmprego::where('titulo' , 'like' , '%' . $searchString . '%')
                             ->orWhere('descricao' , 'like' , '%' . $searchString . '%')
                             ->get();
                            //  ->paginate('25');
        
        // dd($vagasEmpresa , $vagasEmprego);

        $allVagas = $vagasEmpresa->merge($vagasEmprego);

        // $allVagas->push($vagasEmpresa[0]);
        $pag = new VagaEmprego();
        $vagas = $pag->paginate($allVagas);
        dd($vagas);

        return view('home' , compact('vagas'));
    }
}
