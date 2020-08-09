<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function deletarContato(Request $request)
    {

        $id = $request->id;
        $contato = Contato::find($id);
        if ($contato->id == $id) {
            $destroyed = Contato::destroy($id);
            if ($destroyed) {
                flash('Contato deletado com sucesso')->success();
                return redirect()->back();
            }
        } else {
            flash('Contato nao encontrato, tente novamente')->error();
            return redirect()->back();
        }
    }
}
