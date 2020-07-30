<?php

namespace App\Http\Controllers;

use App\Models\VagaEmprego;
use App\Models\Contato;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $allVagas  = VagaEmprego::all();

        $allContatos = Contato::all();
        dd($allContatos, $allVagas);
    }
}
