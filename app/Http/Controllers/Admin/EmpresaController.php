<?php


namespace App\Http\Controllers\Admin;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\VagaEmpregoBeneficio;
use App\Http\Controllers\Controller;
use App\Models\RegimeContratacao;
use Illuminate\Auth\Access\Response;

class EmpresaController extends Controller
{

    public function listarEmpresas(Request $request)
    {
        $empresas = Empresa::all();
        // return response()->json($vagas);
        return view('admin.listar_empresas', compact('empresas'));
    }

    public function cadastrarEmpresaCallback(Request $request)
    {

        DB::beginTransaction();

        $novaEmpresa = new Empresa();
        $novaEmpresa->nome = $request->nome;
        $novaEmpresa->nome_fantasia = $request->nome_fantasia;
        $novaEmpresa->cnpj = $request->cnpj;
        $novaEmpresa->slug = \slugify($request->nome_fantasia);

        $success = $novaEmpresa->save();

        if ($success) {
            if ($request->header('accept') == 'application/json') {

                return response('success', 200);
            } else {
                DB::commit();
                flash("Empresa $request->nome cadastrada com sucesso!")->success();
                return redirect()->back();
            }
        } else {
            DB::rollBack();
            if ($request->header('accept') == 'application/json') {
                return response('success', 400);
            } else {
                flash("Empresa $request->nome nao pode ser cadastrada")->error();
                return redirect()->back();
            }
        }
    }

    public function editarEmpresaForm(Request $request)
    {
        $id = $request->id;
        $empresa  = Empresa::find($id);

        if ($empresa) {
            return view('editarempresa', compact('empresa'));
        }
    }

    public function editarEmpresaSubmit(Request $request)
    {
        $empresa = Empresa::find($request->id);

        if ($empresa) {
            $empresa->nome = $request->nome;
            $empresa->nome_fantasia = $request->nome_fantasia;
            $slug = \slugify($empresa->nome);
            $empresa->slug = $slug;
            $empresa->cnpj = $request->cnpj;

            $updated = $empresa->save();
            if ($updated) {

                flash('Empresa editada com sucesso')->sucess();
                return redirect()->back();
            } else {

                flash('Empresa nao editada, tente novamente')->sucess();
                return redirect()->back();
            }
        } else {
            flash('Empresa nao encontrada')->error();
            return redirect()->back();
        }
    }


    public function deletarEmpresa(Request $request)
    {

        $id = $request->id;
        $empresa = Empresa::find($id);

        if ($empresa) {
            $empresaVagas = Empresa::getAllVagasByEmpresaId($id);
            if ($empresaVagas) {
                foreach ($empresaVagas as $vaga) {
                    $beneficios = VagaEmpregoBeneficio::getAllByVagaId($vaga->id);

                    foreach ($beneficios as $beneficio) {
                        $beneficio->delete();
                    }

                    $vaga->delete();
                }
            }
        } else {
            flash('Empresa nao encontrada, tente novamente.')->error();
            return redirect()->back();
        }
        $deleted = $empresa->delete();

        if ($deleted) {
            flash('Empresa deletada com sucesso.')->success();
            return redirect()->back();
        } else {
            flash('Ocorreu algum erro, tente novamente.')->error();
            return redirect()->back();
        }
    }
}
