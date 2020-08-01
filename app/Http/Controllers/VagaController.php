<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\VagaEmprego;
use App\Models\Empresa;
use App\Models\Contato;
use App\Models\VagaEmpregoBeneficio;

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

    // Separar as funcoes para seus respectivos controllers e nomear as rotas.


    // DeletarContato(byID)  {Nao colocarei esse nome na funcao a menos que outra forma seja necessaria}


    // Contato ::

    public function deletarContato(Request $request)
    {

        $id = $request->id;
        $contato = Contato::find($id);

        if ($contato->id == $id) {
            Contato::destroy($id);

            return 'deletado EeeeeeeeeeeexXPLODIDO';

            // return view flash messenger
        } else {

            // return view flash messenger

            return 'Contato nao encontrato, tente novamente';
        }
    }


    public function editarEmpresa(Request $request)
    {
        // passar o request dinamicamente
        $request->id = 3;
        $request->nome = 'asdsadad RTZ Cansado 22 ';
        $request->nome_fantasia = 'Magina mais cansado do mundo';
        $request->cnpj = '420560321897';

        $empresa = Empresa::find($request->id);

        // $request->nome = ';
        $empresa->nome = $request->nome;
        $empresa->nome_fantasia = $request->nome_fantasia;
        $slug = \slugify($empresa->nome);
        $empresa->slug = $slug;
        $empresa->cnpj = $request->cnpj;


        // tentei inventar coisa nova pra fazer isso, ou com updateOrCreate, mas nao rolou, entao eu so fiz. :( 
        // $updated = Empresa::where(['nome' => $empresa->nome, 'nome_fantasia' => $empresa->nome_fantasia, 'cnpj' => $empresa->cnpj, 'slug' => $empresa->slug]);
        $updated = $empresa->save();

        if ($updated) {
            echo 'EDITASSE';
            // return view flash message
        } else {
            echo 'hmm';
            // return view flash message
        }
    }

    public function deletarEmpresa(Request $request)
    {
        $request->id = 4;
        $id = $request->id;
        $empresa = Empresa::find($id);

        if ($empresa) {
            $empresaVagas = Empresa::getAllVagasByEmpresaId($id);
            if ($empresaVagas) {
                foreach ($empresaVagas as $vaga) {

                    $beneficios = VagaEmprego::find($vaga->id)->beneficios();

                    $beneficios = VagaEmpregoBeneficio::getAllByVagaId($vaga->id);

                    foreach ($beneficios as $beneficio) {
                        $beneficio->delete();
                    }

                    $vaga->delete();
                }
            }
        } else {
            return 'empresa nao encontrada, tente novamente';
        }


        $deleted = $empresa->delete();

        if ($deleted) {
            return 'empresa deletada';
        } else {
            return 'algum erro';
        }
    }
}
