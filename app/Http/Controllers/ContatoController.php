<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contatoSubmit(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->assunto = $request->assunto;
        $contato->telefone = $request->telefone;
        $contato->email = $request->email;
        $contato->email = $request->email;
        $contato->mensagem = $request->mensagem;

        if ($contato->save()) {

            flash('Contato submetido corretamente');
            return redirect()->back();
        } else {
            flash('Registro nao concluido , tente novamente.');
            return redirect()->back();
        }
    }
}
