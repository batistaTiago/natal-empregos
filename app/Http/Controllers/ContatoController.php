<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function contatoForm(Request $request)
    {
        return view('contato');
    }

    public function contatoCallback(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->assunto = $request->assunto;
        $contato->telefone = $request->telefone;
        $contato->email = $request->email;
        $contato->lido = false;
        $contato->mensagem = $request->mensagem;


        $success = $contato->save();
        if ($success) {
            flash('Contato submetido corretamente');
            return redirect()->back();
        } else {
            flash('Registro nao concluido , tente novamente.');
            return redirect()->back();
        }
    }
    public function listarContato(Request $request){
        
    }
}
