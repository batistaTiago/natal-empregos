<?php

namespace App\Http\Controllers;

use App\Models\VagaEmprego;
use App\Models\Contato;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $vagas  = VagaEmprego::all();

        $contatos = Contato::all();
        dd($contatos, $vagas);
        return view('admindashboard', compact('contatos', 'vagas'));
    }
}
